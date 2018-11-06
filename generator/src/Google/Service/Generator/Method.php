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

class Method {
  public $id;
  public $name;
  public $path;
  public $httpMethod;
  public $description = '';
  public $phpdocParams = [];
  public $phpdocOptParams = [];
  public $scopes = [];
  public $parameters = [];
  public $emptyParameters = true;

  public $requestRef;
  public $responseRef;

  private $paramsP = [];
  private $paramsA = [];
  public $hasPostBody = false;
  
  function __construct($key, &$method) {
    $this->id = $method['id'];
    $this->name = $key;
    $this->path = $method['path'];
    $this->httpMethod = $method['httpMethod'];
    if (isset($method['description'])) {
      $this->description = $method['description'];
    }

    if (isset($method['parameters'])) {
      $this->emptyParameters = false;

      $parameters = [];
      if (isset($method['parameterOrder'])) {
        foreach ($method['parameterOrder'] as $movedKey) {
          $parameters[$movedKey] = $method['parameters'][$movedKey];
          unset($method['parameters'][$movedKey]);
        }
      }
      ksort($method['parameters']);
      $this->parameters = array_merge($parameters, $method['parameters']);

      foreach ($this->parameters as $k => $v) {
        if (isset($v['required'])) {
          $var_name = '$'. lcfirst(StringUtilities::ucstrip($k));
          $this->paramsP[] = $var_name;
          $this->paramsA[] = "'$k' => $var_name";
          $this->phpdocParams[] = Method::getPhpDocParam($var_name, $v);
        } else {
          $var_name = lcfirst(StringUtilities::ucstrip($k));
          $this->phpdocOptParams[] = Method::getPhpDocParam($var_name, $v);
        }
      }
    }

    if (isset($method['request']) && $method['httpMethod'] != 'GET') {
      $this->requestRef = $method['request']['$ref'];
      $this->hasPostBody = true;
    }

    if (isset($method['response'])) {
      $this->responseRef = $method['response']['$ref'];
    }
  }

  function getParamsParams($modelclassname) {
    $params = $this->paramsP;
    if ($this->hasPostBody) {
      $params[] = "$modelclassname \$postBody";
    }
    $params[] = '$optParams = array()';
    return implode(", ", $params);
  }

  function getParamsArray() {
    $params = $this->paramsA;
    if ($this->hasPostBody) {
      $params[] = "'postBody' => \$postBody";
    }
    return implode(", ", $params);
  }

  function getDescription() {
    $tmparr = explode('.', $this->id);
    array_shift($tmparr);
    $desc = '('. implode('.', $tmparr) . ')';
    if ($this->description != '') {
      $desc = "$this->description $desc";
    }
    return StringUtilities::commentWordwrap($desc);
  }

  static function getPhpDocParam($name, $node) {
    if (isset($node['required'])) {
      $token = '@param';

      if (isset($node['repeated'])) { // TODO Why is this only for required parameters???
        $repeatToken = '|array';
      } else {
        $repeatToken = '';
      }
    } else {
      $token = '@opt_param';
      $repeatToken = '';
    }

    if (isset($node['type'])) {
      $typeToken = Method::PHP_TYPES[$node['type']];
    }
    if (isset($node['format'])
    && ($node['format'] == 'uint32' || $node['format'] == 'uint64')) {
      $typeToken = "string";
    }
    if (isset($node['description'])) {
      $desc = $node['description'];
    } else {
      $desc = '';
    }
    $str = "$token $typeToken$repeatToken $name $desc";
    return StringUtilities::commentWordwrap($str);
  }

  const PHP_TYPES =
    ['any'     => 'array'
    ,'boolean' => 'bool'
    ,'integer' => 'int'
    ,'long'    => 'string'
    ,'number'  => 'float'
    ,'string'  => 'string'
    ,'uint32'  => 'string'
    ,'uint64'  => 'string'
    ,'int32'   => 'int'
    ,'int64'   => 'string'
    ,'double'  => 'double'
    ,'float'   => 'float'
  ];
}
