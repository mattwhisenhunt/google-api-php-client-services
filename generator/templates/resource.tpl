<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * The "{$Resource->getLiteralName()}" collection of methods.
 * Typical usage is:
 *  <code>
 *   ${$Service->name}Service = new Google_Service_{$Service->canonicalName}(...);
 *   ${$Resource->getLiteralName()} = ${$Service->name}Service->{$Resource->getLiteralName()};
 *  </code>
 */
class Google_Service_{$Service->canonicalName}_Resource_{$Resource->getClassName()} extends Google_Service_Resource
{
{foreach $Resource->methods as $method}
  /**
   *  ({$method->id})
   *
   */
  public function {$Resource->getFnName($method->name)}({$method->getParamsParams($Service->getModelClassName($method->requestRef))})
  {
    $params = array({$method->getParamsArray()});
    $params = array_merge($params, $optParams);
    return $this->call('{$method->name}', array($params){if $method->responseRef}, "{$Service->getModelClassName($method->responseRef)}"{/if});
  }
{/foreach}
}
