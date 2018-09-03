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
 * The "releases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $firebaserulesService = new Google_Service_FirebaseRules(...);
 *   $releases = $firebaserulesService->releases;
 *  </code>
 */
class Google_Service_FirebaseRules_Resource_ProjectsReleases extends Google_Service_Resource
{
  /**
   *  (releases.create)
   *
   * @param Google_Service_FirebaseRules_Release $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_FirebaseRules_Release
   */
  public function create($name, Google_Service_FirebaseRules_Release $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_FirebaseRules_Release");
  }
  /**
   *  (releases.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_FirebaseRules_FirebaserulesEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_FirebaseRules_FirebaserulesEmpty");
  }
  /**
   *  (releases.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_FirebaseRules_Release
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_FirebaseRules_Release");
  }
  /**
   *  (releases.getExecutable)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_FirebaseRules_GetReleaseExecutableResponse
   */
  public function getExecutable($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getExecutable', array($params), "Google_Service_FirebaseRules_GetReleaseExecutableResponse");
  }
  /**
   *  (releases.listProjectsReleases)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_FirebaseRules_ListReleasesResponse
   */
  public function listProjectsReleases($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_FirebaseRules_ListReleasesResponse");
  }
  /**
   *  (releases.patch)
   *
   * @param Google_Service_FirebaseRules_UpdateReleaseRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_FirebaseRules_Release
   */
  public function patch($name, Google_Service_FirebaseRules_UpdateReleaseRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_FirebaseRules_Release");
  }
}
