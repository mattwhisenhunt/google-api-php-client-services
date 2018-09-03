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
 * The "serviceaccountkeys" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $serviceaccountkeys = $androidenterpriseService->serviceaccountkeys;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Resource_Serviceaccountkeys extends Google_Service_Resource
{
  /**
   *  (serviceaccountkeys.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($enterpriseId, $keyId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'keyId' => $keyId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (serviceaccountkeys.insert)
   *
   * @param Google_Service_AndroidEnterprise_ServiceAccountKey $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_ServiceAccountKey
   */
  public function insert($enterpriseId, Google_Service_AndroidEnterprise_ServiceAccountKey $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_AndroidEnterprise_ServiceAccountKey");
  }
  /**
   *  (serviceaccountkeys.listServiceaccountkeys)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_ServiceAccountKeysListResponse
   */
  public function listServiceaccountkeys($enterpriseId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AndroidEnterprise_ServiceAccountKeysListResponse");
  }
}
