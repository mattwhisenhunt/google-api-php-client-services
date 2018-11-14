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

class SchemaProperty
{
    private $serviceName;
    private $name;
    private $getSetName;
    private $dataType;
    private $typeName;
    private $paramName;
    private $_isComplex = false;
  
    private $node;
  
    public function __construct($service_name, $key, &$node)
    {
        $this->serviceName = $service_name;
        $this->name = $key;
        $this->getSetName = $key;

        if (isset($node['type']) && $node['type'] == 'array') {
            if (isset($node['items']['$ref'])) {
                $this->typeName = StringUtilities::ucstrip($node['items']['$ref']);
            } else {
                $this->typeName = '';
            }
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

        if (isset($node['$ref'])
            && ((!isset($node['type'])) || $node['type'] !== 'array')
        ) {
            $this->typeName = StringUtilities::ucstrip($node['$ref']);
        }
  
        if (isset($node['properties'])) {
            $this->typeName = StringUtilities::ucstrip($key);
        }
  
        if (isset($node['additionalProperties']['$ref']) || isset($node['additionalProperties']['properties'])) {
            $this->dataType = 'map';
            if (isset($node['additionalProperties']['$ref'])) {
                $this->typeName = $node['additionalProperties']['$ref'];
            } else {
                $this->typeName = '';
            }
        }
        if (isset($node['additionalProperties']['properties'])) {
            $this->dataType = 'map';
            $this->typeName = StringUtilities::ucstrip($key) . "Element";
            $this->_isComplex = true;
        }
        if (isset($node['additionalProperties']['items']['type'])
            && $node['additionalProperties']['items']['type'] != 'any'
        ) {
            $this->dataType = 'map';
            if (isset($node['additionalProperties']['items']['$ref'])) {
                $this->typeName = $node['additionalProperties']['items']['$ref'];
            } else {
                $this->typeName = '';
            }
        }
  
        $this->node = $node;
    }
  
    public function getTypePrefix($classname)
    {
        if (isset($this->node['type'])
            && $this->node['type'] == 'array'
            && count($this->node['items']) > 1
        ) {
            return $classname;
        }

        if (isset($this->node['properties'])) {
            return $classname;
        }

        if (isset($this->node['additionalProperties']['properties'])) {
            return $classname;
        }

        if (isset(Schema::PREFIXABLES[$this->typeName])) {
            return $this->serviceName;
        }

        return "";
    }
  
    public function getFuncParam()
    {
        $longer = "$this->paramName \$$this->name";
        if ($this->_isComplex) {
            if (isset($this->node['properties'])) {
                return $longer;
            }
            if (isset($this->node['$ref'])
                && ((!isset($this->node['type'])) || $this->node['type'] != 'array')
            ) {
                return $longer;
            }
        }
        return "\$$this->name";
    }

    public function getName()
    {
        return $this->name;
    }
    public function getGetSetName()
    {
        return $this->getSetName;
    }
    public function getDataType()
    {
        return $this->dataType;
    }
    public function getTypeName()
    {
        return $this->typeName;
    }
    public function getParamName()
    {
        return $this->paramName;
    }
    public function getNode()
    {
        return $this->node;
    }

    public function isComplex()
    {
        return $this->_isComplex;
    }

    public function setName($str) {
        $this->name = $str;
    }
    public function setGetSetName($str) {
        $this->getSetName = $str;
    }
    public function setParamName($str) {
        $this->paramName = $str;
    }
    public function setComplexity($complexity) {
        $this->_isComplex = $complexity;
    }
}
