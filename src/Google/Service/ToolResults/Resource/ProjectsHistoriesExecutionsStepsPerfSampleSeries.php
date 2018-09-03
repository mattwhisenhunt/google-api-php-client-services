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
 * The "perfSampleSeries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $toolresultsService = new Google_Service_ToolResults(...);
 *   $perfSampleSeries = $toolresultsService->perfSampleSeries;
 *  </code>
 */
class Google_Service_ToolResults_Resource_ProjectsHistoriesExecutionsStepsPerfSampleSeries extends Google_Service_Resource
{
  /**
   *  (perfSampleSeries.create)
   *
   * @param Google_Service_ToolResults_PerfSampleSeries $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ToolResults_PerfSampleSeries
   */
  public function create($projectId, $historyId, $executionId, $stepId, Google_Service_ToolResults_PerfSampleSeries $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId, 'stepId' => $stepId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_ToolResults_PerfSampleSeries");
  }
  /**
   *  (perfSampleSeries.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ToolResults_PerfSampleSeries
   */
  public function get($projectId, $historyId, $executionId, $stepId, $sampleSeriesId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId, 'stepId' => $stepId, 'sampleSeriesId' => $sampleSeriesId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ToolResults_PerfSampleSeries");
  }
  /**
   *  (perfSampleSeries.listProjectsHistoriesExecutionsStepsPerfSampleSeries)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ToolResults_ListPerfSampleSeriesResponse
   */
  public function listProjectsHistoriesExecutionsStepsPerfSampleSeries($projectId, $historyId, $executionId, $stepId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId, 'stepId' => $stepId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ToolResults_ListPerfSampleSeriesResponse");
  }
}
