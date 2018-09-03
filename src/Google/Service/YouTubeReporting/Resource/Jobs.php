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
 * The "jobs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubereportingService = new Google_Service_YouTubeReporting(...);
 *   $jobs = $youtubereportingService->jobs;
 *  </code>
 */
class Google_Service_YouTubeReporting_Resource_Jobs extends Google_Service_Resource
{
  /**
   *  (jobs.create)
   *
   * @param Google_Service_YouTubeReporting_Job $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTubeReporting_Job
   */
  public function create(Google_Service_YouTubeReporting_Job $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_YouTubeReporting_Job");
  }
  /**
   *  (jobs.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTubeReporting_YoutubereportingEmpty
   */
  public function delete($jobId, $optParams = array())
  {
    $params = array('jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_YouTubeReporting_YoutubereportingEmpty");
  }
  /**
   *  (jobs.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTubeReporting_Job
   */
  public function get($jobId, $optParams = array())
  {
    $params = array('jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubeReporting_Job");
  }
  /**
   *  (jobs.listJobs)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTubeReporting_ListJobsResponse
   */
  public function listJobs($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubeReporting_ListJobsResponse");
  }
}
