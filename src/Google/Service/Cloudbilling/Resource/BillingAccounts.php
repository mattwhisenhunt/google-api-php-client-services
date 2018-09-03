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
 * The "billingAccounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudbillingService = new Google_Service_Cloudbilling(...);
 *   $billingAccounts = $cloudbillingService->billingAccounts;
 *  </code>
 */
class Google_Service_Cloudbilling_Resource_BillingAccounts extends Google_Service_Resource
{
  /**
   *  (billingAccounts.create)
   *
   * @param Google_Service_Cloudbilling_BillingAccount $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Cloudbilling_BillingAccount
   */
  public function create(Google_Service_Cloudbilling_BillingAccount $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Cloudbilling_BillingAccount");
  }
  /**
   *  (billingAccounts.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Cloudbilling_BillingAccount
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Cloudbilling_BillingAccount");
  }
  /**
   *  (billingAccounts.getIamPolicy)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Cloudbilling_Policy
   */
  public function getIamPolicy($resource, $optParams = array())
  {
    $params = array('resource' => $resource);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_Cloudbilling_Policy");
  }
  /**
   *  (billingAccounts.listBillingAccounts)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Cloudbilling_ListBillingAccountsResponse
   */
  public function listBillingAccounts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Cloudbilling_ListBillingAccountsResponse");
  }
  /**
   *  (billingAccounts.patch)
   *
   * @param Google_Service_Cloudbilling_BillingAccount $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Cloudbilling_BillingAccount
   */
  public function patch($name, Google_Service_Cloudbilling_BillingAccount $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Cloudbilling_BillingAccount");
  }
  /**
   *  (billingAccounts.setIamPolicy)
   *
   * @param Google_Service_Cloudbilling_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Cloudbilling_Policy
   */
  public function setIamPolicy($resource, Google_Service_Cloudbilling_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_Cloudbilling_Policy");
  }
  /**
   *  (billingAccounts.testIamPermissions)
   *
   * @param Google_Service_Cloudbilling_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Cloudbilling_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_Cloudbilling_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_Cloudbilling_TestIamPermissionsResponse");
  }
}
