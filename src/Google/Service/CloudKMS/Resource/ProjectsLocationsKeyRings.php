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
 * The "keyRings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudkmsService = new Google_Service_CloudKMS(...);
 *   $keyRings = $cloudkmsService->keyRings;
 *  </code>
 */
class Google_Service_CloudKMS_Resource_ProjectsLocationsKeyRings extends Google_Service_Resource
{
  /**
   *  (keyRings.create)
   *
   * @param Google_Service_CloudKMS_KeyRing $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudKMS_KeyRing
   */
  public function create($parent, Google_Service_CloudKMS_KeyRing $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudKMS_KeyRing");
  }
  /**
   *  (keyRings.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_KeyRing
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudKMS_KeyRing");
  }
  /**
   *  (keyRings.getIamPolicy)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_Policy
   */
  public function getIamPolicy($resource, $optParams = array())
  {
    $params = array('resource' => $resource);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_CloudKMS_Policy");
  }
  /**
   *  (keyRings.listProjectsLocationsKeyRings)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudKMS_ListKeyRingsResponse
   */
  public function listProjectsLocationsKeyRings($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudKMS_ListKeyRingsResponse");
  }
  /**
   *  (keyRings.setIamPolicy)
   *
   * @param Google_Service_CloudKMS_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_Policy
   */
  public function setIamPolicy($resource, Google_Service_CloudKMS_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_CloudKMS_Policy");
  }
  /**
   *  (keyRings.testIamPermissions)
   *
   * @param Google_Service_CloudKMS_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_CloudKMS_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_CloudKMS_TestIamPermissionsResponse");
  }
}
