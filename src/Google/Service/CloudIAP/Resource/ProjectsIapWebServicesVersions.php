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
 * The "versions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $iapService = new Google_Service_CloudIAP(...);
 *   $versions = $iapService->versions;
 *  </code>
 */
class Google_Service_CloudIAP_Resource_ProjectsIapWebServicesVersions extends Google_Service_Resource
{
  /**
   *  (versions.getIamPolicy)
   *
   * @param Google_Service_CloudIAP_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIAP_Policy
   */
  public function getIamPolicy($resource, Google_Service_CloudIAP_GetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_CloudIAP_Policy");
  }
  /**
   *  (versions.setIamPolicy)
   *
   * @param Google_Service_CloudIAP_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIAP_Policy
   */
  public function setIamPolicy($resource, Google_Service_CloudIAP_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_CloudIAP_Policy");
  }
  /**
   *  (versions.testIamPermissions)
   *
   * @param Google_Service_CloudIAP_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIAP_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_CloudIAP_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_CloudIAP_TestIamPermissionsResponse");
  }
}
