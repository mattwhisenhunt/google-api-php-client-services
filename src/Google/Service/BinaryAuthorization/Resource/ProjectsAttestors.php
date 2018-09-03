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
 * The "attestors" collection of methods.
 * Typical usage is:
 *  <code>
 *   $binaryauthorizationService = new Google_Service_BinaryAuthorization(...);
 *   $attestors = $binaryauthorizationService->attestors;
 *  </code>
 */
class Google_Service_BinaryAuthorization_Resource_ProjectsAttestors extends Google_Service_Resource
{
  /**
   *  (attestors.create)
   *
   * @param Google_Service_BinaryAuthorization_Attestor $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_BinaryAuthorization_Attestor
   */
  public function create($parent, Google_Service_BinaryAuthorization_Attestor $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_BinaryAuthorization_Attestor");
  }
  /**
   *  (attestors.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_BinaryAuthorization_BinaryauthorizationEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_BinaryAuthorization_BinaryauthorizationEmpty");
  }
  /**
   *  (attestors.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_BinaryAuthorization_Attestor
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_BinaryAuthorization_Attestor");
  }
  /**
   *  (attestors.getIamPolicy)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_BinaryAuthorization_IamPolicy
   */
  public function getIamPolicy($resource, $optParams = array())
  {
    $params = array('resource' => $resource);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_BinaryAuthorization_IamPolicy");
  }
  /**
   *  (attestors.listProjectsAttestors)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_BinaryAuthorization_ListAttestorsResponse
   */
  public function listProjectsAttestors($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_BinaryAuthorization_ListAttestorsResponse");
  }
  /**
   *  (attestors.setIamPolicy)
   *
   * @param Google_Service_BinaryAuthorization_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BinaryAuthorization_IamPolicy
   */
  public function setIamPolicy($resource, Google_Service_BinaryAuthorization_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_BinaryAuthorization_IamPolicy");
  }
  /**
   *  (attestors.testIamPermissions)
   *
   * @param Google_Service_BinaryAuthorization_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BinaryAuthorization_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_BinaryAuthorization_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_BinaryAuthorization_TestIamPermissionsResponse");
  }
  /**
   *  (attestors.update)
   *
   * @param Google_Service_BinaryAuthorization_Attestor $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BinaryAuthorization_Attestor
   */
  public function update($name, Google_Service_BinaryAuthorization_Attestor $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_BinaryAuthorization_Attestor");
  }
}
