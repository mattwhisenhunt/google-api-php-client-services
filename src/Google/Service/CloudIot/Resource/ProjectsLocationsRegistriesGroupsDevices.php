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
 *   $cloudiotService = new Google_Service_CloudIot(...);
 *   $devices = $cloudiotService->devices;
 *  </code>
 */
class Google_Service_CloudIot_Resource_ProjectsLocationsRegistriesGroupsDevices extends Google_Service_Resource
{
  /**
   *  (devices.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudIot_Device
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudIot_Device");
  }
  /**
   *  (devices.listProjectsLocationsRegistriesGroupsDevices)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudIot_ListDevicesResponse
   */
  public function listProjectsLocationsRegistriesGroupsDevices($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudIot_ListDevicesResponse");
  }
  /**
   *  (devices.modifyCloudToDeviceConfig)
   *
   * @param Google_Service_CloudIot_ModifyCloudToDeviceConfigRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIot_DeviceConfig
   */
  public function modifyCloudToDeviceConfig($name, Google_Service_CloudIot_ModifyCloudToDeviceConfigRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('modifyCloudToDeviceConfig', array($params), "Google_Service_CloudIot_DeviceConfig");
  }
  /**
   *  (devices.patch)
   *
   * @param Google_Service_CloudIot_Device $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudIot_Device
   */
  public function patch($name, Google_Service_CloudIot_Device $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudIot_Device");
  }
}
