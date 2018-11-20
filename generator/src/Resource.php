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

class Resource
{
    const PHP_WORDS = [
        '__halt_compiler' => true,
        'abstract'        => true,
        'and'             => true,
        'array'           => true,
        'as'              => true,
        'break'           => true,
        'callable'        => true,
        'case'            => true,
        'catch'           => true,
        'class'           => true,
        'clone'           => true,
        'const'           => true,
        'continue'        => true,
        'declare'         => true,
        'default'         => true,
        'die'             => true,
        'do'              => true,
        'echo'            => true,
        'else'            => true,
        'elseif'          => true,
        'empty'           => true,
        'enddeclare'      => true,
        'endfor'          => true,
        'endforeach'      => true,
        'endif'           => true,
        'endswitch'       => true,
        'endwhile'        => true,
        'eval'            => true,
        'exit'            => true,
        'extends'         => true,
        'final'           => true,
        'finally'         => true,
        'for'             => true,
        'foreach'         => true,
        'function'        => true,
        'global'          => true,
        'goto'            => true,
        'if'              => true,
        'implements'      => true,
        'include'         => true,
        'include_once'    => true,
        'instanceof'      => true,
        'insteadof'       => true,
        'interface'       => true,
        'isset'           => true,
        'list'            => true,
        'namespace'       => true,
        'new'             => true,
        'or'              => true,
        'print'           => true,
        'private'         => true,
        'protected'       => true,
        'public'          => true,
        'require'         => true,
        'require_once'    => true,
        'return'          => true,
        'static'          => true,
        'switch'          => true,
        'throw'           => true,
        'trait'           => true,
        'try'             => true,
        'unset'           => true,
        'use'             => true,
        'var'             => true,
        'while'           => true,
        'xor'             => true,
        'yield'           => true,
        // not a reserved word in PHP but method name inherited from
        // Google_Service_Resource
        'call'            => true,
    ];

    private $methods;

    protected $names;
    protected $resources;
    protected $scopes    = [];
  
    public function __construct($keys, $node)
    {
        $this->names = $keys;

        if (isset($node['resources'])) {
            $this->resources = new \SplFixedArray(count($node['resources']));
            ksort($node['resources']);
            foreach ($node['resources'] as $k => $v) {
                $this->resources[$this->resources->key()] = new Resource(array_merge($keys, [$k]), $v);
                $this->resources->next();
            }
        } else {
            $this->resources = new \SplFixedArray(0);
        }

        if (isset($node['methods'])) {
            $this->methods = new \SplFixedArray(count($node['methods']));
            ksort($node['methods']);
            foreach ($node['methods'] as $k => $v) {
                if (isset($v['scopes'])) {
                    foreach ($v['scopes'] as $scope) {
                        $this->scopes[$scope] = 1;
                    }
                }
                $this->methods[$this->methods->key()] = new Method($k, $v);
                $this->methods->next();
            }
        } else {
            $this->methods = new \SplFixedArray(0);
        }
    }

    public function getClassName()
    {
        $str = implode("", array_map('ucfirst', $this->names));
        return StringUtilities::ucstrip($str);
    }

    public function getLiteralName()
    {
        return $this->names[count($this->names)-1];
    }

    public function getMemberName()
    {
        return implode("_", $this->names);
    }

    public function getScopes()
    {
        $arr = $this->scopes;
        foreach ($this->resources as $resource) {
            $arr = array_merge($arr, $resource->getScopes());
        }
        return $arr;
    }

    public function getMemberNames()
    {
        $arr = [];
        if (count($this->methods) > 0) {
            $arr[] = $this->getMemberName();
        }
        foreach ($this->resources as $resource) {
            $arr = array_merge($arr, $resource->getMemberNames());
        }
        return $arr;
    }

    public function getMembers()
    {
        $arr = [];
        if (count($this->methods) > 0) {
            $arr[] = $this;
        }
        foreach ($this->resources as $resource) {
            $arr = array_merge($arr, $resource->getMembers());
        }
        return $arr;
    }

    public function getAllResources()
    {
        $arr = [$this];

        foreach ($this->resources as $resource) {
            $arr = array_merge($arr, $resource->getAllResources());
        }
        return $arr;
    }

    public function getFnName($name)
    {
        if (isset(Resource::PHP_WORDS[$name])) {
            return $name.$this->getClassName();
        }
        return $name;
    }

    public function getMethods()
    {
        return $this->methods;
    }
}
