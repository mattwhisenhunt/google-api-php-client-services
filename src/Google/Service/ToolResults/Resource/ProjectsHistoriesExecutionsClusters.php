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
 * The "clusters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $toolresultsService = new Google_Service_ToolResults(...);
 *   $clusters = $toolresultsService->clusters;
 *  </code>
 */
class Google_Service_ToolResults_Resource_ProjectsHistoriesExecutionsClusters extends Google_Service_Resource
{
  /**
   *  (clusters.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ToolResults_ScreenshotCluster
   */
  public function get($projectId, $historyId, $executionId, $clusterId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId, 'clusterId' => $clusterId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ToolResults_ScreenshotCluster");
  }
  /**
   *  (clusters.listProjectsHistoriesExecutionsClusters)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ToolResults_ListScreenshotClustersResponse
   */
  public function listProjectsHistoriesExecutionsClusters($projectId, $historyId, $executionId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ToolResults_ListScreenshotClustersResponse");
  }
}
