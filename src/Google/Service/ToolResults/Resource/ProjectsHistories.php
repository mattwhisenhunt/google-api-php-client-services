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
 * The "histories" collection of methods.
 * Typical usage is:
 *  <code>
 *   $toolresultsService = new Google_Service_ToolResults(...);
 *   $histories = $toolresultsService->histories;
 *  </code>
 */
class Google_Service_ToolResults_Resource_ProjectsHistories extends Google_Service_Resource
{
  /**
   *  (histories.create)
   *
   * @param Google_Service_ToolResults_History $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ToolResults_History
   */
  public function create($projectId, Google_Service_ToolResults_History $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_ToolResults_History");
  }
  /**
   *  (histories.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ToolResults_History
   */
  public function get($projectId, $historyId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ToolResults_History");
  }
  /**
   *  (histories.listProjectsHistories)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ToolResults_ListHistoriesResponse
   */
  public function listProjectsHistories($projectId, $optParams = array())
  {
    $params = array('projectId' => $projectId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ToolResults_ListHistoriesResponse");
  }
}
