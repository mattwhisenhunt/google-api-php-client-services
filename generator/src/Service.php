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

class Service
{
    const CONSTRUCTOR_DESCRIPTION =
        'Constructs the internal representation of the %s service.';
    private $name;
    private $version;
    private $description;
    private $documentationLink;
    private $rootUrl;
    private $servicePath;
    private $canonicalName;
    private $constructorDescription;
    private $forceJson = false;
    private $dataWrapper = false;

    private $schemas;
    private $resources;
    private $methods;
    private $scopeDescriptions = [];

    public function __construct($doc)
    {
        $this->name = $doc['name'];
        $this->version = $doc['version'];
        $this->description = wordwrap(
            trim($doc['description']),
            77,
            PHP_EOL . ' * '
        );
        $this->documentationLink = $doc['documentationLink'] ?? '';
        $this->rootUrl = $doc['rootUrl'] ?? '';
        $this->servicePath = $doc['servicePath'] ?? '';
        $this->canonicalName = ucfirst(
            str_replace(' ', '', $doc['canonicalName'] ?? $this->name)
        );

        $desc = sprintf(Service::CONSTRUCTOR_DESCRIPTION, $this->canonicalName);
        $this->constructorDescription = wordwrap($desc, 77, PHP_EOL . '   * ');

        if ($doc['parameters']['alt']['default'] ?? '' != 'json'
            && in_array('json', $doc['parameters']['alt']['enum'] ?? [])
        ) {
            $this->forceJson = true;
        }

        if (isset($doc['schemas'])) {
            $this->schemas = new \SplFixedArray(count($doc['schemas']));
            foreach ($doc['schemas'] as $k => $v) {
                $this->schemas[$this->schemas->key()] = new Schema(ucfirst($this->name), [$k], $v);
                $this->schemas->next();
            }
        } else {
            $this->schemas = new \SplFixedArray(0);
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

    public function getMemberNames()
    {
        $arr = [];
        foreach ($this->resources as $r) {
            $arr = array_merge($arr, $r->getMemberNames());
        }
        return $arr;
    }

    public function getMembers()
    {
        $arr = [];
        foreach ($this->resources as $r) {
            $arr = array_merge($arr, $r->getMembers());
        }
        return $arr;
    }

    public function getAllResources()
    {
        $arr = [];
        foreach ($this->resources as $r) {
            $arr = array_merge($arr, $r->getAllResources());
        }
        return $arr;
    }

    public function getSchemas()
    {
        $arr = [];
        foreach ($this->schemas as $s) {
            $arr = array_merge($arr, $s->getSchemas());
        }
        return $arr;
    }
    
    public function getMethods()
    {
        return $this->methods;
    }

    public function getScopes()
    {
        $scopes = [];
        foreach ($this->resources as $r) {
            $scopes = array_merge($scopes, $r->getScopes());
        }

        ksort($scopes);
        $realScopes = [];
        foreach ($scopes as $k => $v) {
            // rtrim for just domain scopes
            $parts = explode("/", rtrim($k, '/'));

            $li = count($parts) - 1;

            $shortKey = strtoupper($parts[$li]);
            $shortKey = str_replace('-', '_', $shortKey);
            $shortKey = str_replace('.', '_', $shortKey);
            if (isset($realScopes[$shortKey])) {
                $oldKey  = Service::keyify($realScopes[$shortKey][0]);
                $longKey = Service::keyify($k);
                $realScopes[$oldKey]  = $realScopes[$shortKey];
                $realScopes[$longKey] = [$k, $this->scopeDescriptions[$k]];
                unset($realScopes[$shortKey]);
            } else {
                $realScopes[$shortKey] = [$k, $this->scopeDescriptions[$k]];
            }
        }
        return $realScopes;
    }

    public function getModelClassName($schemaName)
    {
        return "Google_Service_". $this->canonicalName
          . "_" . $this->getSafeSchemaName(StringUtilities::ucstrip($schemaName));
    }

    public function getSafeSchemaName($schemaName)
    {
        if (isset(Schema::PREFIXABLES[$schemaName])) {
            return ucfirst($this->name) . $schemaName;
        }
        return $schemaName;
    }

    public function getPropParamName($prop, $className)
    {
        $prefix = "Google_Service_$this->canonicalName";

        return $prefix . "_" .
            $prop->getTypePrefix($this->getSafeSchemaName($className)) .
            $prop->getTypeName();
    }

    public static function keyify($k)
    {
        $ret = strtoupper(str_replace(".", "_", trim($k, "https:")));
        return trim(str_replace("/", "_", $ret), "_") . "S";
    }

    /**
     * Helper method that encapsulates access to isItemNodeComplex. Complex
     * properties render more code in the generated class.
     * @see Service::isItemNodeComplex()
     * @see SchemaProperty::$complexity
     *
     * @param SchemaProperty $prop
     *
     * @return boolean
     */
    public function isPropertyComplex($prop)
    {
        if (is_null($prop)) {
            return false;
        }
        if (isset($prop->getNode()['properties'])) {
            return true;
        }
        if (isset($prop->getNode()['additionalProperties']['$ref'])) {
            if ($prop->getNode()['additionalProperties']['$ref'] == 'JsonValue') {
                return false;
            }
            return true;
        }
        if (isset($prop->getNode()['additionalProperties']['items'])) {
            return $this->isItemNodeComplex($prop->getNode()['additionalProperties']['items']);
        }

        if (isset($prop->getNode()['items'])) {
            return $this->isItemNodeComplex($prop->getNode()['items']);
        }

        if (isset($prop->getNode()['$ref'])) {
            if ($prop->getNode()['$ref'] == 'JsonObject') {
                return false;
            }
            return true;
        }

        if (isset($prop->getNode()['dataType']) && $prop->getNode()['dataType'] == 'map') {
            return true;
        }

        return false;
    }

    /**
     * Helper method to access schemas not referenced in properties.
     *
     * @param array $items
     *
     * @return boolean
     */
    public function isItemNodeComplex($items)
    {
        if (count($items) == 2 && isset($items['format'])) {
            return false;
        }

        if (isset($items['enum'])) {
            return false;
        }

        if (count($items) == 1 && isset($items['type'])
        && $items['type'] == 'string') {
            return false;
        }

        if (count($items) == 1 && isset($items['$ref'])) {
            for ($i = 0; $i < count($this->schemas); $i++) {
                if ($this->schemas[$i]->getRefName() == $items['$ref']) {
                    return $this->schemas[$i]->isComplex();
                }
            }
        }

        if (count($items) == 1 && (isset($items['type']) && $items['type'] == 'any')) {
            return false;
        }
        if (isset($items['items']) && count($items['items']) == 1
        && $items['items']['type'] == 'any') {
            return false;
        }
        if (isset($items['additionalProperties']['type'])
        && $items['additionalProperties']['type'] == 'any') {
            return false;
        }
        if (isset($items['items'])) {
            return $this->isItemNodeComplex($items['items']);
        }
        return true;
    }

    public function getCanonicalName()
    {
        return $this->canonicalName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDocumentationLink()
    {
        return $this->documentationLink;
    }

    public function getRootUrl()
    {
        return $this->rootUrl;
    }

    public function getServicePath()
    {
        return $this->servicePath;
    }

    public function getConstructorDescription()
    {
        return $this->constructorDescription;
    }

    public function hasDataWrapper()
    {
        return $this->dataWrapper;
    }

    public function shouldForceJson()
    {
        return $this->forceJson;
    }
}
