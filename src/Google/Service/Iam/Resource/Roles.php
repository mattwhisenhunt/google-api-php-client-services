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
class Google_Service_Iam_Resource_Roles extends Google_Service_Resource
{
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
   *  (roles.listRoles)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Iam_ListRolesResponse
   */
  public function listRoles($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Iam_ListRolesResponse");
  }
  /**
   *  (roles.queryGrantableRoles)
   *
   * @param Google_Service_Iam_QueryGrantableRolesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Iam_QueryGrantableRolesResponse
   */
  public function queryGrantableRoles(Google_Service_Iam_QueryGrantableRolesRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('queryGrantableRoles', array($params), "Google_Service_Iam_QueryGrantableRolesResponse");
  }
}
