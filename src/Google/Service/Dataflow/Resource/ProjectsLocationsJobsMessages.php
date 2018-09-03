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
 * The "messages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataflowService = new Google_Service_Dataflow(...);
 *   $messages = $dataflowService->messages;
 *  </code>
 */
class Google_Service_Dataflow_Resource_ProjectsLocationsJobsMessages extends Google_Service_Resource
{
  /**
   *  (messages.listProjectsLocationsJobsMessages)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dataflow_ListJobMessagesResponse
   */
  public function listProjectsLocationsJobsMessages($projectId, $location, $jobId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'location' => $location, 'jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dataflow_ListJobMessagesResponse");
  }
}
