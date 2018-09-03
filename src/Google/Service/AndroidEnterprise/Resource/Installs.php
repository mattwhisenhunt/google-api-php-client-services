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
 * The "installs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $installs = $androidenterpriseService->installs;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Resource_Installs extends Google_Service_Resource
{
  /**
   *  (installs.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($enterpriseId, $userId, $deviceId, $installId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'installId' => $installId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (installs.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_Install
   */
  public function get($enterpriseId, $userId, $deviceId, $installId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'installId' => $installId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AndroidEnterprise_Install");
  }
  /**
   *  (installs.listInstalls)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_InstallsListResponse
   */
  public function listInstalls($enterpriseId, $userId, $deviceId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AndroidEnterprise_InstallsListResponse");
  }
  /**
   *  (installs.patch)
   *
   * @param Google_Service_AndroidEnterprise_Install $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_Install
   */
  public function patch($enterpriseId, $userId, $deviceId, $installId, Google_Service_AndroidEnterprise_Install $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'installId' => $installId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_AndroidEnterprise_Install");
  }
  /**
   *  (installs.update)
   *
   * @param Google_Service_AndroidEnterprise_Install $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_Install
   */
  public function update($enterpriseId, $userId, $deviceId, $installId, Google_Service_AndroidEnterprise_Install $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'installId' => $installId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_AndroidEnterprise_Install");
  }
}
