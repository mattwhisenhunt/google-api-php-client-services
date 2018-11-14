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

class Schema
{
    const PREFIXABLES =
    ["Empty"=>1, "File"=>1, "List"=>1, "Namespace"=>1, "Object"=>1, "Parent"=>1, "Resource"=>1];
    protected $serviceName;
    protected $names;
    protected $write;
    protected $cc;
    protected $suffix;
    private $properties;
    private $collectionKey;
    private $propKeys = [];
    protected $schemas = [];

    public function __construct($service_name, $key, &$node)
    {
        $this->serviceName = $service_name;
        $this->names = $key;

        list($this->cc, $this->suffix) = $this->appendChildren($node);
        if (isset($node['properties'])) {
            $properties = $node['properties'];
        }
        if ($this->suffix == 'Element') {
            $properties = $node['additionalProperties']['properties'];
        }

        if (isset($properties)) {
            $this->properties = new \SplFixedArray(count($properties));
            ksort($properties);
            foreach ($properties as $k => &$v) {
                $this->properties[$this->properties->key()] = new SchemaProperty($this->serviceName, $k, $v);
                $this->propKeys[$k] = $this->properties->key();
                $this->properties->next();
                if (isset($v['type']) && $v['type'] == 'array') {
                    $this->collectionKey = $k; //TODO Just pick the last one that is an array??
                }
            }
        } else {
            $this->properties = new \SplFixedArray;
        }

        $this->write = $this->hasFile($node);
    }

    public function hasFile(&$node)
    {
        if ($node['type'] == 'object') {
            if (isset($node['additionalProperties'])
                && is_array($node['additionalProperties'])
                && count($node['additionalProperties']) == 1
            ) {
                return false;
            }
            if (isset($node['additionalProperties']['type'])
                && $node['additionalProperties']['type'] == 'any'
            ) {
                return false;
            }
            return true;
        }
        return false;
    }

    public function appendChildren(&$node)
    {

        if (isset($node['items'])) {
            assert($node['type'] == 'array');
            if (count($node['items']) == 2 && isset($node['items']['format'])) {
                return [0, ''];
            }
            $new_names = array_merge($this->names, ['items']);
            $this->schemas[] = new SubSchema($this->serviceName, $new_names, $node['items']);
            return [1, ''];
        }

        if (isset($node['properties'])) {
            foreach ($node['properties'] as $k => &$v) {
                $new_names = array_merge($this->names, ['properties', $k]);
                $this->schemas[] = new SubSchema($this->serviceName, $new_names, $v);
            }
            return [2, '']; // count($node['properties']);
        }

        if (isset($node['additionalProperties']['properties'])) {
            foreach ($node['additionalProperties']['properties'] as $k => &$v) {
                $new_names = array_merge($this->names, ['additionalProperties', 'properties', $k]);
                $this->schemas[] = new SubSchema($this->serviceName, $new_names, $v);
            }
            return [count($node['additionalProperties']['properties']), 'Element'];
        }
        return [0, ''];
    }
  
    public function getName()
    {
        $names = $this->names;
        $i = array_search('additionalProperties', $names);
        if ($i !== false && $names[$i+1] == 'properties') {
            $names[$i] = "Element";
            unset($names[$i+1]);
        }

        $i = array_search('properties', $names);
        if ($i !== false && $names[$i+1] == 'items') {
            $names[$i] = "Items";
            unset($names[$i+1]);
        }

        $i = array_search('properties', $names);
        if ($i !== false && $names[$i+1] == 'items') {
            $names[$i] = "Items";
            unset($names[$i+1]);
        }

        $name = "";
        foreach ($names as $n) {
            if ($n != 'items' && $n != 'properties' && $n != 'additionalProperties') {
                if (isset(Schema::PREFIXABLES[$n])) {
                    $name .= $this->serviceName;
                }
                $name .= StringUtilities::ucstrip($n);
            }
        }
        if (count($names) == 2 && $names[1] == 'items') {
            $name .= 'Items';
        }

        return "$name$this->suffix";
    }
  
    public function getRefName()
    {
        return $this->names[0];
    }

    public function getSchemas()
    {
        $arr = [];
        if ($this->write) {
            $arr[] = $this;
        }
        foreach ($this->schemas as $s) {
            $arr = array_merge($arr, $s->getSchemas());
        }
        return $arr;
    }
  
    public function getSibling($prop)
    {
        $type_pos = strpos($prop->getName(), "Type");
        if ($type_pos === strlen($prop->getName()) - 4 && isset($this->propKeys[substr($prop->getName(), 0, $type_pos)])) {
            return $this->properties[$this->propKeys[substr($prop->getName(), 0, $type_pos)]];
        }
    }
  
    public function isComplex()
    {
        if ($this->write) {
            return true;
        }
        if (count($this->schemas) === 1) {
            return $this->schemas[0]->isComplex();
        }
        return false;
    }

    public function getProperties()
    {
        return $this->properties;
    }
    public function getCollectionKey()
    {
        return $this->collectionKey;
    }
}
