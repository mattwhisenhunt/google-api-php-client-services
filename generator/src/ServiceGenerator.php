<?php
/**
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Service\Generator;

class ServiceGenerator
{
    const PREFERRED = [
    'admin:datatransfer_v1' => true,
    'admin:directory_v1' => true,
    'discovery:v1' => false,
    ];

    private $path = __DIR__ . "/../../src/Google/Service";
    private $ok = true;
    private $api_id;

    public function __construct($path = '')
    {
        if ($path != '') {
            $this->path = $path;
        } else {
            assert(is_dir($this->path));
        }
    }

    public function generate($discoveryURL)
    {
        $old_error_handler = set_error_handler([$this, 'errorHandler']);
        $this->ok = true;

        $service = new Service(json_decode(file_get_contents($discoveryURL), true));
        $this->api_id = $service->getName() . ':' . $service->getVersion();

        if ($service->getCanonicalName() != '') {
            $path = "$this->path/".$service->getCanonicalName();

            if (!is_dir("$path/Resource")) {
                mkdir("$path/Resource", 0755, true);
            }

            $smarty = new \Smarty;
            $smarty->setTemplateDir([__DIR__. '/../templates']);
            $smarty->setCompileDir(sys_get_temp_dir().'/gs_tpls');

            $smarty->assign("Service", $service);
            $smarty->assign("CopyrightYear", 2014);
            file_put_contents("$path.php", $smarty->fetch('service.tpl'));

            foreach ($service->getAllResources() as $resource) {
                $smarty->assign("Resource", $resource);
                $filename = "$path/Resource/" . $resource->getClassName() . ".php";
                file_put_contents($filename, $smarty->fetch('resource.tpl'));
            }

            foreach ($service->getSchemas() as $schema) {
                $classname = $schema->getName();
                $smarty->assign("ClassName", $classname);

                if (count($schema->getProperties()) == 0) {
                    file_put_contents("$path/$classname.php", $smarty->fetch('model.blank.tpl'));
                } else {
                    $properties = [];
                    $internal_gapi_mappings = [];
                    foreach ($schema->getProperties() as $prop) {
                        $prop->setComplexity($prop->isComplex() || $service->isPropertyComplex($prop));

                        if ($service->isPropertyComplex($schema->getSibling($prop))) {
                              $old_name = $prop->getName();
                              $prop->setName("theReal" . StringUtilities::ucstrip($old_name));
                              $prop->setGetSetName($old_name);
                              $internal_gapi_mappings[$old_name] = $prop->getName();
                        } else {
                            $mapkey = trim(lcfirst(StringUtilities::ucstrip($prop->getName())), '$');

                            if ($mapkey != $prop->getName()) {
                                $internal_gapi_mappings[$mapkey] = $prop->getName();
                                $prop->setName($mapkey);
                                $prop->setGetSetName($mapkey);
                            }
                        }

                        $prop->setParamName($service->getPropParamName($prop, $classname));

                        $properties[] = $prop;
                    }

                    $smarty->assign("Properties", $properties);
                    $smarty->assign("CollectionKey", $schema->getCollectionKey());
                    $smarty->assign("InternalGapiMappings", $internal_gapi_mappings);
                    file_put_contents("$path/$classname.php", $smarty->fetch('model.tpl'));
                }
            }
        }

        set_error_handler($old_error_handler);
        return $this->ok;
    }
  
    public function generateAll()
    {
        $apis = json_decode(file_get_contents("https://www.googleapis.com/discovery/v1/apis"));

        foreach ($apis->items as $v) {
            if (ServiceGenerator::PREFERRED[$v->id] ?? $v->preferred) {
                $this->generate($v->discoveryRestUrl);
            }
        }
    }
  
    public function errorHandler($errno, $errstr, $errfile, $errline)
    {
        $this->ok = false;
        file_put_contents(
            'php://stderr',
            $this->api_id .
            " $errstr in $errfile on line $errline" . PHP_EOL
        );
        return true;
    }
}
