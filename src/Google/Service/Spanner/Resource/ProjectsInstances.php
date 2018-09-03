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
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $spannerService = new Google_Service_Spanner(...);
 *   $instances = $spannerService->instances;
 *  </code>
 */
class Google_Service_Spanner_Resource_ProjectsInstances extends Google_Service_Resource
{
  /**
   *  (instances.create)
   *
   * @param Google_Service_Spanner_CreateInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_Operation
   */
  public function create($parent, Google_Service_Spanner_CreateInstanceRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Spanner_Operation");
  }
  /**
   *  (instances.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_SpannerEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Spanner_SpannerEmpty");
  }
  /**
   *  (instances.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_Instance
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Spanner_Instance");
  }
  /**
   *  (instances.getIamPolicy)
   *
   * @param Google_Service_Spanner_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_Policy
   */
  public function getIamPolicy($resource, Google_Service_Spanner_GetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_Spanner_Policy");
  }
  /**
   *  (instances.listProjectsInstances)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Spanner_ListInstancesResponse
   */
  public function listProjectsInstances($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Spanner_ListInstancesResponse");
  }
  /**
   *  (instances.patch)
   *
   * @param Google_Service_Spanner_UpdateInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_Operation
   */
  public function patch($name, Google_Service_Spanner_UpdateInstanceRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Spanner_Operation");
  }
  /**
   *  (instances.setIamPolicy)
   *
   * @param Google_Service_Spanner_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_Policy
   */
  public function setIamPolicy($resource, Google_Service_Spanner_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_Spanner_Policy");
  }
  /**
   *  (instances.testIamPermissions)
   *
   * @param Google_Service_Spanner_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_Spanner_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_Spanner_TestIamPermissionsResponse");
  }
}
