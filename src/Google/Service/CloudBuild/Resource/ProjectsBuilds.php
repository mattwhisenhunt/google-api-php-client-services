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
 * The "builds" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudbuildService = new Google_Service_CloudBuild(...);
 *   $builds = $cloudbuildService->builds;
 *  </code>
 */
class Google_Service_CloudBuild_Resource_ProjectsBuilds extends Google_Service_Resource
{
  /**
   *  (builds.cancel)
   *
   * @param Google_Service_CloudBuild_CancelBuildRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_Build
   */
  public function cancel($projectId, $id, Google_Service_CloudBuild_CancelBuildRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params), "Google_Service_CloudBuild_Build");
  }
  /**
   *  (builds.create)
   *
   * @param Google_Service_CloudBuild_Build $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_Operation
   */
  public function create($projectId, Google_Service_CloudBuild_Build $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudBuild_Operation");
  }
  /**
   *  (builds.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_Build
   */
  public function get($projectId, $id, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudBuild_Build");
  }
  /**
   *  (builds.listProjectsBuilds)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudBuild_ListBuildsResponse
   */
  public function listProjectsBuilds($projectId, $optParams = array())
  {
    $params = array('projectId' => $projectId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudBuild_ListBuildsResponse");
  }
  /**
   *  (builds.retry)
   *
   * @param Google_Service_CloudBuild_RetryBuildRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_Operation
   */
  public function retry($projectId, $id, Google_Service_CloudBuild_RetryBuildRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('retry', array($params), "Google_Service_CloudBuild_Operation");
  }
}
