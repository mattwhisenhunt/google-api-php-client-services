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
 *   $dataflowService = new Google_Service_Dataflow(...);
 *   $jobs = $dataflowService->jobs;
 *  </code>
 */
class Google_Service_Dataflow_Resource_ProjectsLocationsJobs extends Google_Service_Resource
{
  /**
   *  (jobs.create)
   *
   * @param Google_Service_Dataflow_Job $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dataflow_Job
   */
  public function create($projectId, $location, Google_Service_Dataflow_Job $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'location' => $location ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Dataflow_Job");
  }
  /**
   *  (jobs.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dataflow_Job
   */
  public function get($projectId, $location, $jobId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'location' => $location, 'jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Dataflow_Job");
  }
  /**
   *  (jobs.getMetrics)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dataflow_JobMetrics
   */
  public function getMetrics($projectId, $location, $jobId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'location' => $location, 'jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('getMetrics', array($params), "Google_Service_Dataflow_JobMetrics");
  }
  /**
   *  (jobs.listProjectsLocationsJobs)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dataflow_ListJobsResponse
   */
  public function listProjectsLocationsJobs($projectId, $location, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'location' => $location);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dataflow_ListJobsResponse");
  }
  /**
   *  (jobs.update)
   *
   * @param Google_Service_Dataflow_Job $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataflow_Job
   */
  public function update($projectId, $location, $jobId, Google_Service_Dataflow_Job $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'location' => $location, 'jobId' => $jobId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Dataflow_Job");
  }
}
