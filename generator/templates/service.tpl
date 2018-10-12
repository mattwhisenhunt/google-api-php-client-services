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
 * Service definition for {$Service->canonicalName} ({$Service->version}).
 *
 * <p>
 * {$Service->description}</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="{$Service->documentationLink}" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_{$Service->canonicalName} extends Google_Service
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
{if $Service->methods}
  private $base_methods;
{else}
  
{/if}
  /**
   * {$Service->constructorDescription}
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = '{$Service->rootUrl}';
    $this->servicePath = '{$Service->servicePath}';
    $this->version = '{$Service->version}';
    $this->serviceName = '{$Service->name}';

{foreach $Service->getMembers() as $resource}
    $this->{$resource->getMemberName()} = new Google_Service_{$Service->canonicalName}_Resource_{$resource->getClassName()}(
        $this,
        $this->serviceName,
        '{$resource->getLiteralName()}',
        array(
          'methods' => array(
            {foreach $resource->methods as $method}{* Resource -> Method *}
'{$method->name}' => array(
              'path' => '{$method->path}',
              'httpMethod' => '{$method->httpMethod}',
{if $method->emptyParameters}
              'parameters' => array(),
{else}
              'parameters' => array({foreach $method->parameters as $pname => $pval}

                '{$pname}' => array(
                  'location' => '{$pval['location']}',
                  'type' => '{$pval['type']}',
{if $pval['repeated']}
                  'repeated' => true,
{/if}
{if $pval['required']}
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
{if $Service->methods}
    $this->base_methods = new Google_Service_Resource(
        $this,
        $this->serviceName,
        '',
        array(
          'methods' => array(
            {foreach $Service->methods as $method}{* Resource -> Method *}
'{$method->name}' => array(
              'path' => '{$method->path}',
              'httpMethod' => '{$method->httpMethod}',
{if $method->emptyParameters}
              'parameters' => array(),
{else}
              'parameters' => array({foreach $method->parameters as $pname => $pval}

                '{$pname}' => array(
                  'location' => '{$pval['location']}',
                  'type' => '{$pval['type']}',
{if $pval['repeated']}
                  'repeated' => true,
{/if}
{if $pval['required']}
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
{foreach $Service->methods as $method}
  /**
   * ({$method->id})
   *
   * @param array $optParams Optional parameters.
{if $method->parameters}
   *
{foreach $method->parameters as $pname => $pval}
   * @opt_param string {$pname}
{/foreach}
{/if}
   * @return Google_Service_{$Service->canonicalName}_{$method->responseRef}
   */
  public function {$method->name}($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('{$method->name}', array($params), "Google_Service_{$Service->canonicalName}_{$method->responseRef}");
  }
{/foreach}
}
