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

function rootSchema($name_key){
  global $CapCan, $doc;
  $node = &$GLOBALS['schemas'][$name_key];
  $fn = rename_taboos(str_replace('_', '', $name_key));
  assert(!$node['ClassName']);
  $node['ClassName'] = $fn;

  list($cc) = countChildren([$name_key]);

  // Make a PHP
  // if ($node['properties']) { // TODO Empty Objects?!?!?
  if ($node['type'] == 'object') {
    if (is_array($node['additionalProperties']) && 
      count($node['additionalProperties']) == 1 || $node['additionalProperties']['type'] == 'any') {
      return;
    }

    if (!is_dir(DEST. "$CapCan")) {
      mkdir(DEST. "$CapCan", 0755, true);
    }

    ob_start();
    include '_Model.php';
    file_put_contents(DEST. "$CapCan/$fn.php", ob_get_clean());
  }
}

function childSchema($keys) {
  global $CapCan;
  $node = getNodeReference($keys);

  list($cc, $suffix) = countChildren($keys);
  if ($cc > 1 || $suffix !== '') {
    $fk = replace_labels($keys);
    $fk = array_filter($fk, 'is_properties');
    $fk = array_map('rename_taboos', $fk);
    $fn = implode('', $fk);
    $fn = str_replace('_', ' ', $fn);
    $fn = ucwords($fn);
    $fn = str_replace(' ', '', $fn);
    $fn .= $suffix;
    if (count($keys) == 2 && $keys[1] == 'items') {
      $fn .= 'Items';
    }
    assert(!$node['ClassName']);
    $node['ClassName'] = $fn;

    if ($suffix == 'Element') {
      $node = getNodeReference(array_merge($keys,['additionalProperties']));
    }

    if (!is_dir(DEST. "$CapCan")) {
      mkdir(DEST. "$CapCan", 0755, true);
    }

    ob_start();
    include '_Model.php';
    file_put_contents(DEST. "$CapCan/$fn.php", ob_get_clean());
  }
}

function countChildren($keys) {
  $node = getNodeReference($keys);

  assert(($node['items'     ] && $node['properties'          ]) == false);
  assert(($node['items'     ] && $node['additionalProperties']) == false);
  assert(($node['properties'] && $node['additionalProperties']) == false);

   // ['type'] == 'array') {
  if ($node['items']) {
    assert($node['type'] == 'array');
    if (count($node['items']) == 2 && $node['items']['format']) {
      return [0, ''];
    }
    childSchema(array_merge($keys, ['items']));
    return [1, ''];
  }

  if ($node['properties']) {
    foreach ($node['properties'] as $k => &$v) {
      childSchema(array_merge($keys,['properties', $k]));
    }
    return [2, '']; // count($node['properties']);
  }

  if ($node['additionalProperties']['properties']) {
    foreach ($node['additionalProperties']['properties'] as $k => &$v) {
      childSchema(array_merge($keys, ['additionalProperties', 'properties', $k]));
    }
    return [count($node['additionalProperties']['properties']), 'Element'];
  }
  return [0, ''];
}

function getNodeReference($keys) {
  $node = &$GLOBALS['schemas'];
  foreach ($keys as $k) {
    $node = &$node[$k];
  }
  return $node;
}

function is_properties($str) {
  if ($str == 'items'               ) return false;
  if ($str == 'properties'          ) return false;
  if ($str == 'additionalProperties') return false;
  return true;
}

function rename_taboos($str) {
  if ($GLOBALS['TABOO'][$str]) {
    return ucfirst($GLOBALS['doc']['name']) . ucfirst($str);
  }
  return ucfirst($str);
}

function replace_labels($arr) {
  $i = array_search('additionalProperties', $arr);
  if ($i !== false && $arr[$i+1] == 'properties') {

    $arr[$i] = "Element";
    unset($arr[$i+1]);
    return $arr;
  }

  $i = array_search('properties', $arr);
  if ($i !== false && $arr[$i+1] == 'items') {
    $arr[$i] = "Items";
    unset($arr[$i+1]);
  }

  $i = array_search('properties', $arr);
  if ($i !== false && $arr[$i+1] == 'items') {
    $arr[$i] = "Items";
    unset($arr[$i+1]);
  }
  return $arr;
}

function ucStrip($str) {
  $str = str_replace('-', ' ', $str);
  $str = str_replace('_', ' ', $str);
  $str = ucwords($str);
  $str = str_replace(' ', '', $str);
  $str = str_replace('@', '', $str);
  return $str;
}

function map_internally($str){
  $newstr = lcfirst(ucStrip($str));
  $newstr = trim($newstr, '$');
  if ($newstr != $str) return $newstr;

  return '';
}

function itemSimplicity($items) {

  if (count($items) == 2 && $items['format']) return true;

  if ($items['enum']) return true;

  if (count($items) == 1 && $items['type'] == 'string') return true;

  if (count($items) == 1 && $items['$ref']
  && !is_property_complex($GLOBALS['doc']['schemas'][$items['$ref']])) {
    return true;
  }

  if (count($items) == 1 && $items['type'] == 'any') return true;
  if ($items['items'] && count($items['items']) == 1 && $items['items']['type'] == 'any') return true;
  if ($items['additionalProperties']['type'] == 'any') return true;
  if ($items['items']) {
    return itemSimplicity($items['items']);
  }
  return false;
}

function is_property_complex(&$property) {
  if (isset($property['properties'])) {
    return true;
  }
  if ($property['additionalProperties']['$ref']) {
    
    if ($property['additionalProperties']['$ref'] == 'JsonValue') {
      return is_property_complex($GLOBALS['doc']['schemas'][$property['additionalProperties']['$ref']]);
    }
    return true;
  }
  if ($property['additionalProperties']['items']) {
    return !itemSimplicity($property['additionalProperties']['items']);
  }
  
  if ($property['items']) {
    return !itemSimplicity($property['items']);
  }
  
  if ($property['$ref']) {
    return is_property_complex($GLOBALS['doc']['schemas'][$property['$ref']]);
    if ($property['$ref'] == 'JsonObject') {
      return is_property_complex($GLOBALS['doc']['schemas'][$property['$ref']]);
    }
    return true;
  }

  if ($property['DataType'] == 'map') {
    return true;
  }

  return false;
}
