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
 * The "roles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $iamService = new Google_Service_Iam(...);
 *   $roles = $iamService->roles;
 *  </code>
 */
class Google_Service_Iam_Resource_ProjectsRoles extends Google_Service_Resource
{
  /**
   *  (roles.create)
   *
   * @param Google_Service_Iam_CreateRoleRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Iam_Role
   */
  public function create($parent, Google_Service_Iam_CreateRoleRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Iam_Role");
  }
  /**
   *  (roles.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Iam_Role
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Iam_Role");
  }
  /**
   *  (roles.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Iam_Role
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Iam_Role");
  }
  /**
   *  (roles.listProjectsRoles)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Iam_ListRolesResponse
   */
  public function listProjectsRoles($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Iam_ListRolesResponse");
  }
  /**
   *  (roles.patch)
   *
   * @param Google_Service_Iam_Role $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Iam_Role
   */
  public function patch($name, Google_Service_Iam_Role $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Iam_Role");
  }
  /**
   *  (roles.undelete)
   *
   * @param Google_Service_Iam_UndeleteRoleRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Iam_Role
   */
  public function undelete($name, Google_Service_Iam_UndeleteRoleRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('undelete', array($params), "Google_Service_Iam_Role");
  }
}
