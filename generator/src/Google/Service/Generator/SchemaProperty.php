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

class SchemaProperty {
  private $serviceName;
  public $name;
  public $getSetName;
  public $dataType;
  public $typeName;
  public $paramName;
  public $isComplex = false;
  
  public $node;
  
  function __construct($service_name, $key, &$node) {
    $this->serviceName = $service_name;
    $this->name = $key;
    $this->getSetName = $key;

    if ($node['type'] == 'array') {
      $this->typeName = StringUtilities::ucstrip($node['items']['$ref']);
      $this->dataType = 'array';

      if (count($node['items']) > 1) {
        $this->typeName = StringUtilities::ucstrip($key);
      } else {
        // if ($node['items']['$ref'] TODO
        // && $doc['schemas'][$node['items']]['$ref']['type'] == 'array') {
        if ($service_name == "Translate" && $key == 'detections') { //TODO
          $this->typeName .= "Items";
        }
      }
    }

    if ($node['$ref'] && $node['type'] !== 'array') {
      $this->typeName = StringUtilities::ucstrip($node['$ref']);
    }
  
    if ($node['properties']) {
      $this->typeName = StringUtilities::ucstrip($key);
    }
  
    if ($node['additionalProperties']['$ref'] || $node['additionalProperties']['properties']) {
      $this->dataType = 'map';
      $this->typeName = $node['additionalProperties']['$ref'];
    }
    if ($node['additionalProperties']['properties']) {
      $this->dataType = 'map';
      $this->typeName = StringUtilities::ucstrip($key) . "Element";
      $this->isComplex = true;
    }
    if ($node['additionalProperties']['items'] && $node['additionalProperties']['items']['type'] != 'any') {
      $this->dataType = 'map';
      $this->typeName = $node['additionalProperties']['items']['$ref'];
    }
  
    $this->node = $node;
  }
  
  function getTypePrefix($classname) {
    if ($this->node['type'] == 'array' && count($this->node['items']) > 1)
       return $classname;

    if ($this->node['properties']){
      return $classname;
    }

    if ($this->node['additionalProperties']['properties'])
      return $classname;

    if (Schema::PREFIXABLES[$this->typeName]) {
      return $this->serviceName;
    }

    return "";
  }
  
  function getFuncParam() {
    $longer = "$this->paramName \$$this->name";
    if ($this->isComplex) {
      if ($this->node['properties']) return $longer;
      if ($this->node['type'] != 'array' && $this->node['$ref']) return $longer;
    }
    return "\$$this->name";
  }
}
