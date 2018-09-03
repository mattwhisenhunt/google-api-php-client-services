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
 * The "steps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $toolresultsService = new Google_Service_ToolResults(...);
 *   $steps = $toolresultsService->steps;
 *  </code>
 */
class Google_Service_ToolResults_Resource_ProjectsHistoriesExecutionsSteps extends Google_Service_Resource
{
  /**
   *  (steps.create)
   *
   * @param Google_Service_ToolResults_Step $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ToolResults_Step
   */
  public function create($projectId, $historyId, $executionId, Google_Service_ToolResults_Step $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_ToolResults_Step");
  }
  /**
   *  (steps.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ToolResults_Step
   */
  public function get($projectId, $historyId, $executionId, $stepId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId, 'stepId' => $stepId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ToolResults_Step");
  }
  /**
   *  (steps.getPerfMetricsSummary)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ToolResults_PerfMetricsSummary
   */
  public function getPerfMetricsSummary($projectId, $historyId, $executionId, $stepId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId, 'stepId' => $stepId);
    $params = array_merge($params, $optParams);
    return $this->call('getPerfMetricsSummary', array($params), "Google_Service_ToolResults_PerfMetricsSummary");
  }
  /**
   *  (steps.listProjectsHistoriesExecutionsSteps)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ToolResults_ListStepsResponse
   */
  public function listProjectsHistoriesExecutionsSteps($projectId, $historyId, $executionId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ToolResults_ListStepsResponse");
  }
  /**
   *  (steps.patch)
   *
   * @param Google_Service_ToolResults_Step $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ToolResults_Step
   */
  public function patch($projectId, $historyId, $executionId, $stepId, Google_Service_ToolResults_Step $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId, 'stepId' => $stepId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_ToolResults_Step");
  }
  /**
   *  (steps.publishXunitXmlFiles)
   *
   * @param Google_Service_ToolResults_PublishXunitXmlFilesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ToolResults_Step
   */
  public function publishXunitXmlFiles($projectId, $historyId, $executionId, $stepId, Google_Service_ToolResults_PublishXunitXmlFilesRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId, 'stepId' => $stepId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('publishXunitXmlFiles', array($params), "Google_Service_ToolResults_Step");
  }
}
