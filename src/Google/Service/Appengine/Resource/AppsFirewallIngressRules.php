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
 * The "ingressRules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google_Service_Appengine(...);
 *   $ingressRules = $appengineService->ingressRules;
 *  </code>
 */
class Google_Service_Appengine_Resource_AppsFirewallIngressRules extends Google_Service_Resource
{
  /**
   *  (ingressRules.batchUpdate)
   *
   * @param Google_Service_Appengine_BatchUpdateIngressRulesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_BatchUpdateIngressRulesResponse
   */
  public function batchUpdate($appsId, Google_Service_Appengine_BatchUpdateIngressRulesRequest $postBody, $optParams = array())
  {
    $params = array('appsId' => $appsId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdate', array($params), "Google_Service_Appengine_BatchUpdateIngressRulesResponse");
  }
  /**
   *  (ingressRules.create)
   *
   * @param Google_Service_Appengine_FirewallRule $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_FirewallRule
   */
  public function create($appsId, Google_Service_Appengine_FirewallRule $postBody, $optParams = array())
  {
    $params = array('appsId' => $appsId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Appengine_FirewallRule");
  }
  /**
   *  (ingressRules.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_AppengineEmpty
   */
  public function delete($appsId, $ingressRulesId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'ingressRulesId' => $ingressRulesId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Appengine_AppengineEmpty");
  }
  /**
   *  (ingressRules.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_FirewallRule
   */
  public function get($appsId, $ingressRulesId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'ingressRulesId' => $ingressRulesId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Appengine_FirewallRule");
  }
  /**
   *  (ingressRules.listAppsFirewallIngressRules)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Appengine_ListIngressRulesResponse
   */
  public function listAppsFirewallIngressRules($appsId, $optParams = array())
  {
    $params = array('appsId' => $appsId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Appengine_ListIngressRulesResponse");
  }
  /**
   *  (ingressRules.patch)
   *
   * @param Google_Service_Appengine_FirewallRule $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Appengine_FirewallRule
   */
  public function patch($appsId, $ingressRulesId, Google_Service_Appengine_FirewallRule $postBody, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'ingressRulesId' => $ingressRulesId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Appengine_FirewallRule");
  }
}
