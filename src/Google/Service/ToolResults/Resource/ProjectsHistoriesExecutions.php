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
 * The "executions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $toolresultsService = new Google_Service_ToolResults(...);
 *   $executions = $toolresultsService->executions;
 *  </code>
 */
class Google_Service_ToolResults_Resource_ProjectsHistoriesExecutions extends Google_Service_Resource
{
  /**
   *  (executions.create)
   *
   * @param Google_Service_ToolResults_Execution $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ToolResults_Execution
   */
  public function create($projectId, $historyId, Google_Service_ToolResults_Execution $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_ToolResults_Execution");
  }
  /**
   *  (executions.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ToolResults_Execution
   */
  public function get($projectId, $historyId, $executionId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ToolResults_Execution");
  }
  /**
   *  (executions.listProjectsHistoriesExecutions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ToolResults_ListExecutionsResponse
   */
  public function listProjectsHistoriesExecutions($projectId, $historyId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ToolResults_ListExecutionsResponse");
  }
  /**
   *  (executions.patch)
   *
   * @param Google_Service_ToolResults_Execution $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ToolResults_Execution
   */
  public function patch($projectId, $historyId, $executionId, Google_Service_ToolResults_Execution $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_ToolResults_Execution");
  }
}
