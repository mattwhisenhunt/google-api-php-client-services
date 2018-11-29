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
    private $path = __DIR__ . "/../../src/Google/Service";

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
        $previousErrorHandler = set_error_handler([$this, 'errorHandler']);

        $service = new Service(json_decode(file_get_contents($discoveryURL), true));

        if ($service->getCanonicalName() != '') {
            $path = "$this->path/" . $service->getCanonicalName();

            if (!is_dir("$path/Resource")) {
                mkdir("$path/Resource", 0755, true);
            }

            $smarty = new \Smarty;
            $smarty->setTemplateDir([__DIR__ . '/../templates']);
            $smarty->setCompileDir(sys_get_temp_dir() . '/gs_tpls');

            $smarty->assign("Service", $service);
            $smarty->assign("CopyrightYear", 2014);
            file_put_contents("$path.php", $smarty->fetch('service.tpl'));

            foreach ($service->getAllResources() as $resource) {
                $smarty->assign("Resource", $resource);
                $filename = "$path/Resource/" . $resource->getClassName() . ".php";
                file_put_contents($filename, $smarty->fetch('resource.tpl'));
            }

            foreach ($service->getSchemas() as $schema) {
                $className = $schema->getName();
                $smarty->assign("ClassName", $className);

                if (count($schema->getProperties()) == 0) {
                    file_put_contents("$path/$className.php", $smarty->fetch('model.blank.tpl'));
                } else {
                    $properties = [];
                    $internalGapiMappings = [];
                    foreach ($schema->getProperties() as $prop) {
                        $prop->setIsComplex($prop->isComplex() || $service->isPropertyComplex($prop));

                        if ($service->isPropertyComplex($schema->getSibling($prop))) {
                              $previousName = $prop->getName();
                              $prop->setName("theReal" . StringUtilities::ucstrip($previousName));
                              $prop->setGetSetName($previousName);
                              $internalGapiMappings[$previousName] = $prop->getName();
                        } else {
                            $mapkey = trim(lcfirst(StringUtilities::ucstrip($prop->getName())), '$');

                            if ($mapkey != $prop->getName()) {
                                $internalGapiMappings[$mapkey] = $prop->getName();
                                $prop->setName($mapkey);
                                $prop->setGetSetName($mapkey);
                            }
                        }

                        $prop->setParamName($service->getPropParamName($prop, $className));

                        $properties[] = $prop;
                    }

                    $smarty->assign("Properties", $properties);
                    $smarty->assign("CollectionKey", $schema->getCollectionKey());
                    $smarty->assign("InternalGapiMappings", $internalGapiMappings);
                    file_put_contents("$path/$className.php", $smarty->fetch('model.tpl'));
                }
            }
        }

        set_error_handler($previousErrorHandler);
    }

    static public function errorHandler($errno, $errstr, $errfile, $errline)
    {
        file_put_contents(
            'php://stderr',
            "$errstr in $errfile on line $errline" . PHP_EOL
        );
        return true;
    }
}
