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

class Resource {
  public $methods = [];

  protected $names;
  protected $resources = [];
  protected $scopes    = [];
  
  function __construct($keys, &$node) {
    $this->names = $keys;

    if (isset($node['resources'])) {
      $this->resources = new \SplFixedArray(count($node['resources']));
      ksort($node['resources']);
      foreach ($node['resources'] as $k => &$v) {
        $this->resources[$this->resources->key()] = new Resource(array_merge($keys, [$k]), $v);
        $this->resources->next();
      }
    }

    if (isset($node['methods'])) {
      $this->methods = new \SplFixedArray(count($node['methods']));
      ksort($node['methods']);
      foreach ($node['methods'] as $k => &$v) {
        if (isset($v['scopes'])) {
          foreach ($v['scopes'] as $scope) {
            $this->scopes[$scope] = 1;
          }
        }
        $this->methods[$this->methods->key()] = new Method($k, $v);
        $this->methods->next();
      }
    }
  }

  function getClassName() {
    $str = implode("", array_map('ucfirst', $this->names));
    return StringUtilities::ucstrip($str);
  }

  function getLiteralName() {
    return $this->names[count($this->names)-1];
  }

  function getMemberName() {
    return implode("_", $this->names);
  }

  function getScopes() {
    $arr = $this->scopes;
    foreach ($this->resources as $resource) {
      $arr = array_merge($arr, $resource->getScopes());
    }
    return $arr;
  }

  function getMemberNames() {
    $arr = [];
    if (count($this->methods) > 0) {
      $arr[] = $this->getMemberName();
    }
    foreach ($this->resources as $resource) {
      $arr = array_merge($arr, $resource->getMemberNames());
    }
    return $arr;
  }

  function getMembers() {
    $arr = [];
    if (count($this->methods) > 0) {
      $arr[] = $this;
    }
    foreach ($this->resources as $resource) {
      $arr = array_merge($arr, $resource->getMembers());
    }
    return $arr;
  }

  function getAllResources() {
    $arr = [$this];

    foreach ($this->resources as $resource) {
      $arr = array_merge($arr, $resource->getAllResources());
    }
    return $arr;
  }

  function getFnName($name) {
    if (isset(Resource::PHP_WORDS[$name])) {
      return $name.$this->getClassName();
    }
    return $name;
  }

  const PHP_WORDS =
    ['__halt_compiler' => 1
    ,'abstract'        => 1
    ,'and'             => 1
    ,'array'           => 1
    ,'as'              => 1
    ,'break'           => 1
    ,'callable'        => 1
    ,'case'            => 1
    ,'catch'           => 1
    ,'class'           => 1
    ,'clone'           => 1
    ,'const'           => 1
    ,'continue'        => 1
    ,'declare'         => 1
    ,'default'         => 1
    ,'die'             => 1
    ,'do'              => 1
    ,'echo'            => 1
    ,'else'            => 1
    ,'elseif'          => 1
    ,'empty'           => 1
    ,'enddeclare'      => 1
    ,'endfor'          => 1
    ,'endforeach'      => 1
    ,'endif'           => 1
    ,'endswitch'       => 1
    ,'endwhile'        => 1
    ,'eval'            => 1
    ,'exit'            => 1
    ,'extends'         => 1
    ,'final'           => 1
    ,'finally'         => 1
    ,'for'             => 1
    ,'foreach'         => 1
    ,'function'        => 1
    ,'global'          => 1
    ,'goto'            => 1
    ,'if'              => 1
    ,'implements'      => 1
    ,'include'         => 1
    ,'include_once'    => 1
    ,'instanceof'      => 1
    ,'insteadof'       => 1
    ,'interface'       => 1
    ,'isset'           => 1
    ,'list'            => 1
    ,'namespace'       => 1
    ,'new'             => 1
    ,'or'              => 1
    ,'print'           => 1
    ,'private'         => 1
    ,'protected'       => 1
    ,'public'          => 1
    ,'require'         => 1
    ,'require_once'    => 1
    ,'return'          => 1
    ,'static'          => 1
    ,'switch'          => 1
    ,'throw'           => 1
    ,'trait'           => 1
    ,'try'             => 1
    ,'unset'           => 1
    ,'use'             => 1
    ,'var'             => 1
    ,'while'           => 1
    ,'xor'             => 1
    ,'yield'           => 1
    // BONUS
    ,'call'            => 1
  ];
}
