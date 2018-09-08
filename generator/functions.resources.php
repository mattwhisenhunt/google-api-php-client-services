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

function walkResource($keys) {
  $leaf = $keys[count($keys)-1];
  $node = getResourceReference($keys);
  $class_name = render_resource_name($keys);

  if ($node['resources'])
  foreach ($node['resources'] as $k => $v) {
    walkResource(array_merge($keys, [$k]));
  }

  $methods = [];
  if ($node['methods']) {
    ksort($node['methods']);
    $methods = array_map('distill_methods', array_keys($node['methods']), $node['methods']);
    $GLOBALS['all_resources'][implode("_", $keys)] = $keys;
  }

  global $CapCan;

  if (!is_dir(DEST. "$CapCan/Resource")) {
    mkdir(DEST. "$CapCan/Resource", 0755, true);
  }

  assert(($method['parameterOrder'] && !$method['parameters']) === false);

  ob_start();
  include '_Resource.php';
  file_put_contents(DEST. "$CapCan/Resource/$class_name.php", ob_get_clean());
}

function distill_methods($key, &$method) {
  if ($method['scopes']) {
    foreach ($method['scopes'] as $scope) {
      $GLOBALS['scopes'][$scope] = 1;
    }
  }

  $method['Name'] = $key;
  if ($GLOBALS['PHP_WORDS'][$key]) {
    $method['Taboo'] = true;
  }
  if ($method['parameters']) {

    if ($method['parameterOrder']) {
      $parameters = [];
      foreach ($method['parameterOrder'] as $movedKey) {
        $parameters[$movedKey] = $method['parameters'][$movedKey];
        unset($method['parameters'][$movedKey]);
      }
      $method['parameters'] = array_merge($parameters, $method['parameters']);
    }
    foreach ($method['parameters'] as $k => $v) {
      if (!$v['required']) {
        $method['Optional'] = true;
      } else {
        $method['PList'] .= "$comma\$". lcfirst(ucStrip($k));
        $method['PArry'] .= "$comma'$k' => \$". lcfirst(ucStrip($k));
        $comma = ", ";
      }
    }
  }
  return $method;
}

function print_parameter($name, $param) {
  $typeToken = $GLOBALS['PHP_TYPES'][$param['type']];
  if ($param['format'] == 'uint32' || $param['format'] == 'uint64') {
    $typeToken = "string";
  }

  if ($param['required']) {
    echo "@param $typeToken";

    if ($param['repeated']) { // TODO Why is this only for required parameters???
      echo '|array';
    }
    echo ' $';
  } else {
    echo "@opt_param $typeToken ";
  }

  echo $name;

  // assert($param['description'] != '');
  // echo strpos($param['description'], ". ");
  // echo strpos($param['description'], "\n");
  // $lines = explode("\n", $param['description']);
  // if ($lines[0]) {
  //   return " ". shortest_line();
  // }
}


function getResourceReference($keys) {
  $node = &$GLOBALS['doc'];
  foreach ($keys as $k) {
    $node = &$node['resources'][$k];
  }
  return $node;
}
function render_resource_name($keys) {
  $fn = implode("", array_map('ucfirst', $keys));

  return ucStrip($fn);
}
