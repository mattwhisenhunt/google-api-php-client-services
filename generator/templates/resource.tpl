<?php
/*
 * Copyright {$CopyrightYear} Google LLC
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
 *   ${$Service->getName()}Service = new Google_Service_{$Service->getCanonicalName()}(...);
 *   ${$Resource->getLiteralName()} = ${$Service->getName()}Service->{$Resource->getLiteralName()};
 *  </code>
 */
class Google_Service_{$Service->getCanonicalName()}_Resource_{$Resource->getClassName()} extends Google_Service_Resource
{
{foreach $Resource->getMethods() as $method}
  /**
{$method->getDescription()}
   *
{foreach $method->getPhpdocParams() as $p}
{$p}
{/foreach}
{if $method->hasPostBody()}
   * @param {$Service->getModelClassName($method->getRequestRef())} $postBody
{/if}
   * @param array $optParams Optional parameters.
{if count($method->getPhpdocOptParams()) > 0}
   *
{/if}
{foreach $method->getPhpdocOptParams() as $p}
{$p}
{/foreach}
{if isset($method->getResponseRef())}
   * @return {$Service->getModelClassName($method->getResponseRef())}
{/if}
   */
  public function {$Resource->getFnName($method->getName())}{*
    *}({$method->getParamsParams($Service->getModelClassName($method->getRequestRef()))})
  {
    $params = array({$method->getParamsArray()});
    $params = array_merge($params, $optParams);
{if $Service->shouldForceJson()}
    $params['alt'] = 'json';
{/if}
    return $this->call('{$method->getName()}', array($params){if $method->getResponseRef()}, "{$Service->getModelClassName($method->getResponseRef())}"{/if});
  }
{/foreach}
}
