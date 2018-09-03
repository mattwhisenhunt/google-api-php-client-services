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
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $partnersService = new Google_Service_Partners(...);
 *   $users = $partnersService->users;
 *  </code>
 */
class Google_Service_Partners_Resource_Users extends Google_Service_Resource
{
  /**
   *  (users.createCompanyRelation)
   *
   * @param Google_Service_Partners_CompanyRelation $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Partners_CompanyRelation
   */
  public function createCompanyRelation($userId, Google_Service_Partners_CompanyRelation $postBody, $optParams = array())
  {
    $params = array('userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createCompanyRelation', array($params), "Google_Service_Partners_CompanyRelation");
  }
  /**
   *  (users.deleteCompanyRelation)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Partners_PartnersEmpty
   */
  public function deleteCompanyRelation($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('deleteCompanyRelation', array($params), "Google_Service_Partners_PartnersEmpty");
  }
  /**
   *  (users.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Partners_User
   */
  public function get($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Partners_User");
  }
  /**
   *  (users.updateProfile)
   *
   * @param Google_Service_Partners_UserProfile $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Partners_UserProfile
   */
  public function updateProfile(Google_Service_Partners_UserProfile $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateProfile', array($params), "Google_Service_Partners_UserProfile");
  }
}
