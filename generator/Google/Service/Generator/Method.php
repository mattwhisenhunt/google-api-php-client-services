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

namespace Google\Service\Generator;

class Method {
  public $id;
  public $name;
  public $path;
  public $httpMethod;
  public $scopes = [];
  public $parameters = [];
  public $emptyParameters = true;

  public $requestRef;
  public $responseRef;

  private $paramsP = [];
  private $paramsA = [];
  private $hasPostBody = false;
  
  function __construct($key, &$method) {
    $this->id = $method['id'];
    $this->name = $key;
    $this->path = $method['path'];
    $this->httpMethod = $method['httpMethod'];

    if ($method['parameters']) {
      $this->emptyParameters = false;

      $parameters = [];
      if ($method['parameterOrder']) {
        foreach ($method['parameterOrder'] as $movedKey) {
          $parameters[$movedKey] = $method['parameters'][$movedKey];
          unset($method['parameters'][$movedKey]);
        }
      }
      ksort($method['parameters']);
      $this->parameters = array_merge($parameters, $method['parameters']);

      foreach ($this->parameters as $k => $v) {
        if (!$v['required']) {
          $method['Optional'] = true;
        } else {
          $var_name = '$'. lcfirst(StringUtilities::ucstrip($k));
          $this->paramsP[] = $var_name;
          $this->paramsA[] = "'$k' => $var_name";
        }
      }
    }

    if ($method['request'] && $method['httpMethod'] != 'GET') {
      $this->requestRef = $method['request']['$ref'];
      $this->hasPostBody = true;
    }

    if ($method['response']) {
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
}
