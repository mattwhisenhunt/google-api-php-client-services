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
 * The "databases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $spannerService = new Google_Service_Spanner(...);
 *   $databases = $spannerService->databases;
 *  </code>
 */
class Google_Service_Spanner_Resource_ProjectsInstancesDatabases extends Google_Service_Resource
{
  /**
   *  (databases.create)
   *
   * @param Google_Service_Spanner_CreateDatabaseRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_Operation
   */
  public function create($parent, Google_Service_Spanner_CreateDatabaseRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Spanner_Operation");
  }
  /**
   *  (databases.dropDatabase)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_SpannerEmpty
   */
  public function dropDatabase($database, $optParams = array())
  {
    $params = array('database' => $database);
    $params = array_merge($params, $optParams);
    return $this->call('dropDatabase', array($params), "Google_Service_Spanner_SpannerEmpty");
  }
  /**
   *  (databases.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_Database
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Spanner_Database");
  }
  /**
   *  (databases.getDdl)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_GetDatabaseDdlResponse
   */
  public function getDdl($database, $optParams = array())
  {
    $params = array('database' => $database);
    $params = array_merge($params, $optParams);
    return $this->call('getDdl', array($params), "Google_Service_Spanner_GetDatabaseDdlResponse");
  }
  /**
   *  (databases.getIamPolicy)
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
   *  (databases.listProjectsInstancesDatabases)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Spanner_ListDatabasesResponse
   */
  public function listProjectsInstancesDatabases($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Spanner_ListDatabasesResponse");
  }
  /**
   *  (databases.setIamPolicy)
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
   *  (databases.testIamPermissions)
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
  /**
   *  (databases.updateDdl)
   *
   * @param Google_Service_Spanner_UpdateDatabaseDdlRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_Operation
   */
  public function updateDdl($database, Google_Service_Spanner_UpdateDatabaseDdlRequest $postBody, $optParams = array())
  {
    $params = array('database' => $database ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateDdl', array($params), "Google_Service_Spanner_Operation");
  }
}
