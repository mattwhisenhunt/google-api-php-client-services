<?php
// Copyright 2018 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     https://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

require_once __DIR__ . '/Google/Service/Generator/Method.php';
require_once __DIR__ . '/Google/Service/Generator/Schema.php';
require_once __DIR__ . '/Google/Service/Generator/SchemaProperty.php';
require_once __DIR__ . '/Google/Service/Generator/Service.php';
require_once __DIR__ . '/Google/Service/Generator/StringUtilities.php';
require_once __DIR__ . '/Google/Service/Generator/Resource.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Google\Service\Generator\Service;
use Google\Service\Generator\StringUtilities;

$optind = null;
$options = getopt("c:",[], $optind);
list($discoveryUrl, $destination) = array_slice($argv, $optind);
if (!$options['c']) {
  $options['c'] = '2014';
}

$data_array = json_decode(file_get_contents($discoveryUrl), 1);
$destination = StringUtilities::parseDestination($destination);

$service = new Service($data_array);
$path = $destination. $service->canonicalName;

if (!is_dir("$path/Resource")) {
  mkdir("$path/Resource", 0755, true);
}

$smarty = new Smarty;
$smarty->setTemplateDir([__DIR__.DIRECTORY_SEPARATOR. 'templates']);
$smarty->setCompileDir(sys_get_temp_dir().DIRECTORY_SEPARATOR.'gs_tpls');

$smarty->assign("Service", $service);
$smarty->assign("CopyrightYear", $options['c']);
file_put_contents("$path.php", $smarty->fetch('service.tpl'));

foreach ($service->getAllResources() as $resource) {
  $smarty->assign("Resource", $resource);
  $filename = "$path/Resource/" . $resource->getClassName() . ".php";
  file_put_contents($filename, $smarty->fetch('resource.tpl'));
}

foreach ($service->getSchemas() as $schema) {
  $classname = $schema->getName();
  $smarty->assign("ClassName", $classname);

  if (!$schema->properties) {
    // error_log("$path/$classname.php is blank!");
    if ($classname == "JsonObject") { //TODO
      continue;
    }
    file_put_contents("$path/$classname.php", $smarty->fetch('model.blank.tpl'));

  } else {
    $properties = [];
    $internal_gapi_mappings = [];
    foreach ($schema->properties as $prop) {
      $prop->isComplex = $prop->isComplex || $service->isPropertyComplex($prop);

      if ($service->isPropertyComplex($schema->getSibling($prop))) {
        $old_name = $prop->name;
        $prop->name = "theReal" . StringUtilities::ucstrip($old_name);
        $prop->getSetName = $old_name;
        $internal_gapi_mappings[$old_name] = $prop->name;
      } else {
        $mapkey = trim(lcfirst(StringUtilities::ucstrip($prop->name)), '$');

        if ($mapkey != $prop->name) {
          $internal_gapi_mappings[$mapkey] = $prop->name;
          $prop->name = $mapkey;
          $prop->getSetName = $mapkey;
        }
      }

      $prop->paramName = $service->getPropParamName($prop, $classname);

      $properties[] = $prop;
    }

    $smarty->assign("Properties", $properties);
    $smarty->assign("CollectionKey", $schema->collectionKey);
    $smarty->assign("InternalGapiMappings", $internal_gapi_mappings);
    file_put_contents("$path/$classname.php", $smarty->fetch('model.tpl'));
  }
}
