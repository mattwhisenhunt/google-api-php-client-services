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
 * The "licenses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $licenses = $computeService->licenses;
 *  </code>
 */
class Google_Service_Compute_Resource_Licenses extends Google_Service_Resource
{
  /**
   *  (licenses.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $license, $optParams = array())
  {
    $params = array('project' => $project, 'license' => $license);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (licenses.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_License
   */
  public function get($project, $license, $optParams = array())
  {
    $params = array('project' => $project, 'license' => $license);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_License");
  }
  /**
   *  (licenses.insert)
   *
   * @param Google_Service_Compute_License $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_License $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (licenses.listLicenses)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_LicensesListResponse
   */
  public function listLicenses($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_LicensesListResponse");
  }
  /**
   *  (licenses.testIamPermissions)
   *
   * @param Google_Service_Compute_TestPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_TestPermissionsResponse
   */
  public function testIamPermissions($project, $resource, Google_Service_Compute_TestPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_Compute_TestPermissionsResponse");
  }
}
