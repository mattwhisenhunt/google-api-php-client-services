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
 * The "samples" collection of methods.
 * Typical usage is:
 *  <code>
 *   $toolresultsService = new Google_Service_ToolResults(...);
 *   $samples = $toolresultsService->samples;
 *  </code>
 */
class Google_Service_ToolResults_Resource_ProjectsHistoriesExecutionsStepsPerfSampleSeriesSamples extends Google_Service_Resource
{
  /**
   *  (samples.batchCreate)
   *
   * @param Google_Service_ToolResults_BatchCreatePerfSamplesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ToolResults_BatchCreatePerfSamplesResponse
   */
  public function batchCreate($projectId, $historyId, $executionId, $stepId, $sampleSeriesId, Google_Service_ToolResults_BatchCreatePerfSamplesRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId, 'stepId' => $stepId, 'sampleSeriesId' => $sampleSeriesId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchCreate', array($params), "Google_Service_ToolResults_BatchCreatePerfSamplesResponse");
  }
  /**
   *  (samples.listProjectsHistoriesExecutionsStepsPerfSampleSeriesSamples)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ToolResults_ListPerfSamplesResponse
   */
  public function listProjectsHistoriesExecutionsStepsPerfSampleSeriesSamples($projectId, $historyId, $executionId, $stepId, $sampleSeriesId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId, 'stepId' => $stepId, 'sampleSeriesId' => $sampleSeriesId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ToolResults_ListPerfSamplesResponse");
  }
}
