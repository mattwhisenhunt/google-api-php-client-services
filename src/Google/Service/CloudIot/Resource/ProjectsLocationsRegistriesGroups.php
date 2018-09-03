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
 * The "groups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudiotService = new Google_Service_CloudIot(...);
 *   $groups = $cloudiotService->groups;
 *  </code>
 */
class Google_Service_CloudIot_Resource_ProjectsLocationsRegistriesGroups extends Google_Service_Resource
{
  /**
   *  (groups.getIamPolicy)
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
   *  (groups.setIamPolicy)
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
   *  (groups.testIamPermissions)
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
