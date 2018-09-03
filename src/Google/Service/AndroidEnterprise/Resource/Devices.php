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
 * The "devices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $devices = $androidenterpriseService->devices;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Resource_Devices extends Google_Service_Resource
{
  /**
   *  (devices.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_Device
   */
  public function get($enterpriseId, $userId, $deviceId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AndroidEnterprise_Device");
  }
  /**
   *  (devices.getState)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_DeviceState
   */
  public function getState($enterpriseId, $userId, $deviceId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId);
    $params = array_merge($params, $optParams);
    return $this->call('getState', array($params), "Google_Service_AndroidEnterprise_DeviceState");
  }
  /**
   *  (devices.listDevices)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_DevicesListResponse
   */
  public function listDevices($enterpriseId, $userId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AndroidEnterprise_DevicesListResponse");
  }
  /**
   *  (devices.patch)
   *
   * @param Google_Service_AndroidEnterprise_Device $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AndroidEnterprise_Device
   */
  public function patch($enterpriseId, $userId, $deviceId, Google_Service_AndroidEnterprise_Device $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_AndroidEnterprise_Device");
  }
  /**
   *  (devices.setState)
   *
   * @param Google_Service_AndroidEnterprise_DeviceState $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_DeviceState
   */
  public function setState($enterpriseId, $userId, $deviceId, Google_Service_AndroidEnterprise_DeviceState $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setState', array($params), "Google_Service_AndroidEnterprise_DeviceState");
  }
  /**
   *  (devices.update)
   *
   * @param Google_Service_AndroidEnterprise_Device $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AndroidEnterprise_Device
   */
  public function update($enterpriseId, $userId, $deviceId, Google_Service_AndroidEnterprise_Device $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_AndroidEnterprise_Device");
  }
}
