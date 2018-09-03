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
 * The "userRolePermissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_Service_Dfareporting(...);
 *   $userRolePermissions = $dfareportingService->userRolePermissions;
 *  </code>
 */
class Google_Service_Dfareporting_Resource_UserRolePermissions extends Google_Service_Resource
{
  /**
   *  (userRolePermissions.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_UserRolePermission
   */
  public function get($profileId, $id, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Dfareporting_UserRolePermission");
  }
  /**
   *  (userRolePermissions.listUserRolePermissions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dfareporting_UserRolePermissionsListResponse
   */
  public function listUserRolePermissions($profileId, $optParams = array())
  {
    $params = array('profileId' => $profileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dfareporting_UserRolePermissionsListResponse");
  }
}
