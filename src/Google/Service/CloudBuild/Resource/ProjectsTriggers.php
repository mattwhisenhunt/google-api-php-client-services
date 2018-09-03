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
 * The "triggers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudbuildService = new Google_Service_CloudBuild(...);
 *   $triggers = $cloudbuildService->triggers;
 *  </code>
 */
class Google_Service_CloudBuild_Resource_ProjectsTriggers extends Google_Service_Resource
{
  /**
   *  (triggers.create)
   *
   * @param Google_Service_CloudBuild_BuildTrigger $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_BuildTrigger
   */
  public function create($projectId, Google_Service_CloudBuild_BuildTrigger $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudBuild_BuildTrigger");
  }
  /**
   *  (triggers.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_CloudbuildEmpty
   */
  public function delete($projectId, $triggerId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'triggerId' => $triggerId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_CloudBuild_CloudbuildEmpty");
  }
  /**
   *  (triggers.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_BuildTrigger
   */
  public function get($projectId, $triggerId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'triggerId' => $triggerId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudBuild_BuildTrigger");
  }
  /**
   *  (triggers.listProjectsTriggers)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_ListBuildTriggersResponse
   */
  public function listProjectsTriggers($projectId, $optParams = array())
  {
    $params = array('projectId' => $projectId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudBuild_ListBuildTriggersResponse");
  }
  /**
   *  (triggers.patch)
   *
   * @param Google_Service_CloudBuild_BuildTrigger $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_BuildTrigger
   */
  public function patch($projectId, $triggerId, Google_Service_CloudBuild_BuildTrigger $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'triggerId' => $triggerId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudBuild_BuildTrigger");
  }
  /**
   *  (triggers.run)
   *
   * @param Google_Service_CloudBuild_RepoSource $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_Operation
   */
  public function run($projectId, $triggerId, Google_Service_CloudBuild_RepoSource $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'triggerId' => $triggerId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('run', array($params), "Google_Service_CloudBuild_Operation");
  }
}
