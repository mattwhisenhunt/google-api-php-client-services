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
 * The "thumbnails" collection of methods.
 * Typical usage is:
 *  <code>
 *   $toolresultsService = new Google_Service_ToolResults(...);
 *   $thumbnails = $toolresultsService->thumbnails;
 *  </code>
 */
class Google_Service_ToolResults_Resource_ProjectsHistoriesExecutionsStepsThumbnails extends Google_Service_Resource
{
  /**
   *  (thumbnails.listProjectsHistoriesExecutionsStepsThumbnails)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ToolResults_ListStepThumbnailsResponse
   */
  public function listProjectsHistoriesExecutionsStepsThumbnails($projectId, $historyId, $executionId, $stepId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'historyId' => $historyId, 'executionId' => $executionId, 'stepId' => $stepId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ToolResults_ListStepThumbnailsResponse");
  }
}
