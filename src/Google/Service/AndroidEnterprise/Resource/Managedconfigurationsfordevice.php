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
 * The "managedconfigurationsfordevice" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $managedconfigurationsfordevice = $androidenterpriseService->managedconfigurationsfordevice;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Resource_Managedconfigurationsfordevice extends Google_Service_Resource
{
  /**
   *  (managedconfigurationsfordevice.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($enterpriseId, $userId, $deviceId, $managedConfigurationForDeviceId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'managedConfigurationForDeviceId' => $managedConfigurationForDeviceId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (managedconfigurationsfordevice.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_ManagedConfiguration
   */
  public function get($enterpriseId, $userId, $deviceId, $managedConfigurationForDeviceId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'managedConfigurationForDeviceId' => $managedConfigurationForDeviceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AndroidEnterprise_ManagedConfiguration");
  }
  /**
   *  (managedconfigurationsfordevice.listManagedconfigurationsfordevice)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_ManagedConfigurationsForDeviceListResponse
   */
  public function listManagedconfigurationsfordevice($enterpriseId, $userId, $deviceId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AndroidEnterprise_ManagedConfigurationsForDeviceListResponse");
  }
  /**
   *  (managedconfigurationsfordevice.patch)
   *
   * @param Google_Service_AndroidEnterprise_ManagedConfiguration $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_ManagedConfiguration
   */
  public function patch($enterpriseId, $userId, $deviceId, $managedConfigurationForDeviceId, Google_Service_AndroidEnterprise_ManagedConfiguration $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'managedConfigurationForDeviceId' => $managedConfigurationForDeviceId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_AndroidEnterprise_ManagedConfiguration");
  }
  /**
   *  (managedconfigurationsfordevice.update)
   *
   * @param Google_Service_AndroidEnterprise_ManagedConfiguration $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_ManagedConfiguration
   */
  public function update($enterpriseId, $userId, $deviceId, $managedConfigurationForDeviceId, Google_Service_AndroidEnterprise_ManagedConfiguration $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'managedConfigurationForDeviceId' => $managedConfigurationForDeviceId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_AndroidEnterprise_ManagedConfiguration");
  }
}
