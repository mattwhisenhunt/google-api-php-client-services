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
 * The "registries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudiotService = new Google_Service_CloudIot(...);
 *   $registries = $cloudiotService->registries;
 *  </code>
 */
class Google_Service_CloudIot_Resource_ProjectsLocationsRegistries extends Google_Service_Resource
{
  /**
   *  (registries.create)
   *
   * @param Google_Service_CloudIot_DeviceRegistry $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIot_DeviceRegistry
   */
  public function create($parent, Google_Service_CloudIot_DeviceRegistry $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudIot_DeviceRegistry");
  }
  /**
   *  (registries.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIot_CloudiotEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_CloudIot_CloudiotEmpty");
  }
  /**
   *  (registries.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIot_DeviceRegistry
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudIot_DeviceRegistry");
  }
  /**
   *  (registries.getIamPolicy)
   *
   * @param Google_Service_CloudIot_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIot_Policy
   */
  public function getIamPolicy($resource, Google_Service_CloudIot_GetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_CloudIot_Policy");
  }
  /**
   *  (registries.listProjectsLocationsRegistries)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudIot_ListDeviceRegistriesResponse
   */
  public function listProjectsLocationsRegistries($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudIot_ListDeviceRegistriesResponse");
  }
  /**
   *  (registries.patch)
   *
   * @param Google_Service_CloudIot_DeviceRegistry $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudIot_DeviceRegistry
   */
  public function patch($name, Google_Service_CloudIot_DeviceRegistry $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudIot_DeviceRegistry");
  }
  /**
   *  (registries.setIamPolicy)
   *
   * @param Google_Service_CloudIot_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIot_Policy
   */
  public function setIamPolicy($resource, Google_Service_CloudIot_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_CloudIot_Policy");
  }
  /**
   *  (registries.testIamPermissions)
   *
   * @param Google_Service_CloudIot_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIot_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_CloudIot_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_CloudIot_TestIamPermissionsResponse");
  }
}
