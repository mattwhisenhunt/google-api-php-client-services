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

class Method
{
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

    private $id;
    private $name;
    private $path;
    private $httpMethod;
    private $description = '';
    private $phpdocParams = [];
    private $phpdocOptParams = [];
    private $parameters = [];
    private $emptyParameters = true;

    private $requestRef;
    private $responseRef;

    private $paramsP = [];
    private $paramsA = [];
    private $hasPostBody = false;
  
    public function __construct($key, &$method)
    {
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
            foreach ($method['parameterOrder'] ?? [] as $movedKey) {
                if (isset($method['parameters'][$movedKey])) {
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

    public function getParamsParams($modelclassname)
    {
        $params = $this->paramsP;
        if ($this->hasPostBody) {
            $params[] = "$modelclassname \$postBody";
        }
        $params[] = '$optParams = array()';
        return implode(", ", $params);
    }

    public function getParamsArray()
    {
        $params = $this->paramsA;
        if ($this->hasPostBody) {
            $params[] = "'postBody' => \$postBody";
        }
        return implode(", ", $params);
    }

    public function getDescription()
    {
        $tmparr = explode('.', $this->id);
        array_shift($tmparr);
        $desc = '('. implode('.', $tmparr) . ')';
        if ($this->description != '') {
            $desc = "$this->description $desc";
        }
        return StringUtilities::commentWordwrap($desc);
    }

    public static function getPhpDocParam($name, $node)
    {
        $token = isset($node['required']) ? '@param' : '@opt_param';
        $repeatToken = isset($node['required']) && isset($node['repeated']) ?
            '|array' : '';

        $typeToken = isset($node['type']) ?
            Method::PHP_TYPES[$node['type']] : '';

        if (isset($node['format'])
            && ($node['format'] == 'uint32' || $node['format'] == 'uint64')
        ) {
            $typeToken = "string";
        }

        $desc = $node['description'] ?? '';

        $str = "$token $typeToken$repeatToken $name $desc";
        return StringUtilities::commentWordwrap($str);
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPath()
    {
        return $this->path;
    }
    public function getHttpMethod()
    {
        return $this->httpMethod;
    }
    public function getPhpdocParams()
    {
        return $this->phpdocParams;
    }
    public function getPhpdocOptParams()
    {
        return $this->phpdocOptParams;
    }
    public function getParameters()
    {
        return $this->parameters;
    }
    public function getEmptyParameters()
    {
        return $this->emptyParameters;
    }
    public function getRequestRef()
    {
        return $this->requestRef;
    }
    public function getResponseRef()
    {
        return $this->responseRef;
    }
    public function getHasPostBody()
    {
        return $this->hasPostBody;
    }
}
