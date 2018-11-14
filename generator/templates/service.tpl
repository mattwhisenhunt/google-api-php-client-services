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
 * Service definition for {$Service->getCanonicalName()} ({$Service->getVersion()}).
 *
 * <p>
 * {$Service->getDescription()}</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="{$Service->getDocumentationLink()}" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_{$Service->getCanonicalName()} extends Google_Service
{
{foreach $Service->getScopes() as $k=>$v}
  /** {$v[1]}. */
  const {$k} =
      "{$v[0]}";
{foreachelse}

{/foreach}

{foreach $Service->getMemberNames() as $_}
  public ${$_};
{/foreach}
{if $Service->getMethods()}
  private $base_methods;
{else}
  
{/if}
  /**
   * {$Service->getConstructorDescription()}
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = '{$Service->getRootUrl()}';
    $this->servicePath = '{$Service->getServicePath()}';
    $this->version = '{$Service->getVersion()}';
    $this->serviceName = '{$Service->getName()}';

{foreach $Service->getMembers() as $resource}
    $this->{$resource->getMemberName()} = new Google_Service_{$Service->getCanonicalName()}_Resource_{$resource->getClassName()}(
        $this,
        $this->serviceName,
        '{$resource->getLiteralName()}',
        array(
          'methods' => array(
            {foreach $resource->getMethods() as $method}{* Resource -> Method *}
'{$method->getName()}' => array(
              'path' => '{$method->getPath()}',
              'httpMethod' => '{$method->getHttpMethod()}',
{if $method->getEmptyParameters()}
              'parameters' => array(),
{else}
              'parameters' => array({foreach $method->getParameters() as $pname => $pval}

                '{$pname}' => array(
                  'location' => '{$pval['location']}',
                  'type' => '{$pval['type']}',
{if isset($pval['repeated']) }
                  'repeated' => true,
{/if}
{if isset($pval['required']) }
                  'required' => true,
{/if}
                ),{/foreach}

              ),
{/if}
            ),{/foreach}{* Resource -> Method *}


          )
        )
    );
{/foreach}
{if $Service->getMethods()}
    $this->base_methods = new Google_Service_Resource(
        $this,
        $this->serviceName,
        '',
        array(
          'methods' => array(
            {foreach $Service->getMethods() as $method}{* Resource -> Method *}
'{$method->getName()}' => array(
              'path' => '{$method->getPath()}',
              'httpMethod' => '{$method->getHttpMethod()}',
{if $method->getEmptyParameters()}
              'parameters' => array(),
{else}
              'parameters' => array({foreach $method->getParameters() as $pname => $pval}

                '{$pname}' => array(
                  'location' => '{$pval['location']}',
                  'type' => '{$pval['type']}',
{if isset($pval['repeated']) }
                  'repeated' => true,
{/if}
{if isset($pval['required']) }
                  'required' => true,
{/if}
                ),{/foreach}

              ),
{/if}
            ),{/foreach}{* Resource -> Method *}


          )
        )
    );
{/if}
  }
{foreach $Service->getMethods() as $method}
  /**
   * ({$method->getId()})
   *
   * @param array $optParams Optional parameters.
{if isset($method->getParameters()) }
   *
{foreach $method->getParameters() as $pname => $pval}
   * @opt_param string {$pname}
{/foreach}
{/if}
   * @return Google_Service_{$Service->getCanonicalName()}_{$method->getResponseRef()}
   */
  public function {$method->getName()}($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('{$method->getName()}', array($params), "Google_Service_{$Service->getCanonicalName()}_{$method->getResponseRef()}");
  }
{/foreach}
}
