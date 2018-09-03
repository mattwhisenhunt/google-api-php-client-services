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
 * The "events" collection of methods.
 * Typical usage is:
 *  <code>
 *   $clouderrorreportingService = new Google_Service_Clouderrorreporting(...);
 *   $events = $clouderrorreportingService->events;
 *  </code>
 */
class Google_Service_Clouderrorreporting_Resource_ProjectsEvents extends Google_Service_Resource
{
  /**
   *  (events.listProjectsEvents)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Clouderrorreporting_ListEventsResponse
   */
  public function listProjectsEvents($projectName, $optParams = array())
  {
    $params = array('projectName' => $projectName);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Clouderrorreporting_ListEventsResponse");
  }
  /**
   *  (events.report)
   *
   * @param Google_Service_Clouderrorreporting_ReportedErrorEvent $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Clouderrorreporting_ReportErrorEventResponse
   */
  public function report($projectName, Google_Service_Clouderrorreporting_ReportedErrorEvent $postBody, $optParams = array())
  {
    $params = array('projectName' => $projectName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('report', array($params), "Google_Service_Clouderrorreporting_ReportErrorEventResponse");
  }
}
