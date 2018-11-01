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

class Service {
  public $name;
  public $version;
  public $description;
  public $documentationLink;
  public $rootUrl;
  public $servicePath;
  public $canonicalName;
  public $constructorDescription;
  public $forceJson = false;
  public $dataWrapper = false;

  public $schemas;
  public $resources;
  public $methods;
  private $scopeDescriptions = [];

  function __construct($doc) {
    $this->name = $doc['name'];
    $this->version = $doc['version'];
    $this->description = wordwrap(trim($doc['description']), 77, "\n * ");
    if (isset($doc['documentationLink'])) {
      $this->documentationLink = $doc['documentationLink'];
    }
    $this->rootUrl = $doc['rootUrl'];
    $this->servicePath = $doc['servicePath'];
    if (isset($doc['canonicalName'])) {
      $this->canonicalName = $doc['canonicalName'];
    } else {
      $this->canonicalName = $this->name;
    }
    $this->canonicalName = ucfirst(str_replace(' ', '', $this->canonicalName));
    $this->constructorDescription = wordwrap("Constructs the internal representation of the $this->canonicalName service.", 77, "\n   * ");
    assert($doc['parameters']['alt']);
    if ($doc['parameters']['alt']['default'] != 'json'
    && in_array('json', $doc['parameters']['alt']['enum'])) {
      $this->forceJson = true;
    }

    if (isset($doc['schemas'])) {
      $this->schemas = new \SplFixedArray(count($doc['schemas']));
      foreach ($doc['schemas'] as $k => &$v) {
        $this->schemas[$this->schemas->key()] = new Schema(ucfirst($this->name), [$k], $v);
        $this->schemas->next();
      }
    }

    if (isset($doc['resources'])) {
      $this->resources = new \SplFixedArray(count($doc['resources']));
      ksort($doc['resources']);
      foreach ($doc['resources'] as $k => $v) {
        $this->resources[$this->resources->key()] = new Resource([$k], $v);
        $this->resources->next();
      }
    }

    if (isset($doc['methods'])) {
      $this->methods = new \SplFixedArray(count($doc['methods']));
      ksort($doc['methods']);
      foreach ($doc['methods'] as $k => $v) {
        $this->methods[$this->methods->key()] = new Method($k, $v);
        $this->methods->next();
      }
    }

    if (isset($doc['auth']['oauth2']['scopes'])) {
      foreach ($doc['auth']['oauth2']['scopes'] as $k => $v) {
        $this->scopeDescriptions[$k] = $v['description'];
      }
    }

    // Translation v2 is an example of this feature
    if (isset($doc['features']) && in_array('dataWrapper', $doc['features'])) {
      $this->dataWrapper = true;
    }
  }

  function getMemberNames(){
    $arr = [];
    foreach ($this->resources as $r) {
      $arr = array_merge($arr, $r->getMemberNames());
    }
    return $arr;
  }

  function getMembers(){
    $arr = [];
    foreach ($this->resources as $r) {
      $arr = array_merge($arr, $r->getMembers());
    }
    return $arr;
  }

  function getAllResources(){
    $arr = [];
    foreach ($this->resources as $r) {
      $arr = array_merge($arr, $r->getAllResources());
    }
    return $arr;
  }

  function getSchemas(){
    $arr = [];
    foreach ($this->schemas as $s) {
      $arr = array_merge($arr, $s->getSchemas());
    }
    return $arr;
  }

  function getScopes() {
    $scopes = [];
    foreach ($this->resources as $r) {
      $scopes = array_merge($scopes, $r->getScopes());
    }

    ksort($scopes);
    $real_scopes = [];
    foreach ($scopes as $k => $v) {
      $guts = explode("/", rtrim($k,'/')); // rtrim for just domain scopes

      $li = count($guts) -1;

      $shortKey = strtoupper($guts[$li]);
      $shortKey = str_replace('-', '_', $shortKey);
      $shortKey = str_replace('.', '_', $shortKey);
      if (isset($real_scopes[$shortKey])) {
        $oldKey  = Service::keyify($real_scopes[$shortKey][0]);
        $longKey = Service::keyify($k);
        $real_scopes[$oldKey]  = $real_scopes[$shortKey];
        $real_scopes[$longKey] = [$k, $this->scopeDescriptions[$k]];
        unset($real_scopes[$shortKey]);
      } else {
        $real_scopes[$shortKey] = [$k, $this->scopeDescriptions[$k]];
      }
    }
    return $real_scopes;
  }

  function getModelClassName($schema_name){
    return "Google_Service_". $this->canonicalName . "_" . $this->getSafeSchemaName(StringUtilities::ucstrip($schema_name));
  }

  function getSafeSchemaName($schema_name){
    if (is_array($schema_name)){
      return "";
    }
    if (isset(Schema::PREFIXABLES[$schema_name])) {
      return ucfirst($this->name) . $schema_name;
    }
    return $schema_name;
  }

  function getPropParamName($prop, $classname) {
    $prefix = "Google_Service_$this->canonicalName";
    $type = $prop->typeName;

    return
      $prefix . "_".
      $prop->getTypePrefix($this->getSafeSchemaName($classname)) .
      $prop->typeName;
  }

  function iterateSchemas() {
    $values = [];
    foreach ($this->schemas as $schema) {
      foreach ($schema as $filename => $content) {
        $values[$filename] = $content;
      }
    }
    return $values;
  }

  static function keyify($k) {
    $ret = strtoupper(str_replace(".", "_", trim($k, "https:")));
    return trim(str_replace("/", "_", $ret), "_") . "S";
  }

  function isPropertyComplex($prop) {
    if (!$prop) {
      return false;
    }
    if (isset($prop->node['properties'])) {
      return true;
    }
    if (isset($prop->node['additionalProperties']['$ref'])) {

      if ($prop->node['additionalProperties']['$ref'] == 'JsonValue') { //TODO
        return false;
        // return is_property_complex($GLOBALS['doc']['schemas'][$prop->node['additionalProperties']['$ref']]);
      }
      return true;
    }
    if (isset($prop->node['additionalProperties']['items'])) {
      return $this->isItemNodeComplex($prop->node['additionalProperties']['items']);
    }

    if (isset($prop->node['items'])) {
      return $this->isItemNodeComplex($prop->node['items']);
    }

    if (isset($prop->node['$ref'])) {
      // return $this->isPropertyComplex($GLOBALS['doc']['schemas'][$prop->node['$ref']]); //TODO
      if ($prop->node['$ref'] == 'JsonObject') { //TODO
        return false;
      }
      return true;
    }

    if (isset($prop->node['dataType']) && $prop->node['dataType'] == 'map') {
      return true;
    }

    return false;
  }

  function isItemNodeComplex(&$items) {
    if (count($items) == 2 && isset($items['format'])) return false;

    if (isset($items['enum'])) return false;

    if (count($items) == 1 && isset($items['type'])
    && $items['type'] == 'string')
    {
      return false;
    }

    if (count($items) == 1 && isset($items['$ref'])) {
      for($i = 0; $i < count($this->schemas); $i++) {
        if ($this->schemas[$i]->getRefName() == $items['$ref']) {
          return $this->schemas[$i]->isComplex();
        }
      }
    }

    if (count($items) == 1 && $items['type'] == 'any') return false;
    if (isset($items['items']) && count($items['items']) == 1
    && $items['items']['type'] == 'any')
    {
      return false;
    }
    if (isset($items['additionalProperties']['type'])
    && $items['additionalProperties']['type'] == 'any')
    {
      return false;
    }
    if (isset($items['items'])) {
      return $this->isItemNodeComplex($items['items']);
    }
    return true;
  }
}
