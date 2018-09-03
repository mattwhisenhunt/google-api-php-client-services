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
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $jobs = $bigqueryService->jobs;
 *  </code>
 */
class Google_Service_Bigquery_Resource_Jobs extends Google_Service_Resource
{
  /**
   *  (jobs.cancel)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Bigquery_JobCancelResponse
   */
  public function cancel($projectId, $jobId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params), "Google_Service_Bigquery_JobCancelResponse");
  }
  /**
   *  (jobs.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Bigquery_Job
   */
  public function get($projectId, $jobId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Bigquery_Job");
  }
  /**
   *  (jobs.getQueryResults)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Bigquery_GetQueryResultsResponse
   */
  public function getQueryResults($projectId, $jobId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('getQueryResults', array($params), "Google_Service_Bigquery_GetQueryResultsResponse");
  }
  /**
   *  (jobs.insert)
   *
   * @param Google_Service_Bigquery_Job $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Bigquery_Job
   */
  public function insert($projectId, Google_Service_Bigquery_Job $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Bigquery_Job");
  }
  /**
   *  (jobs.listJobs)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Bigquery_JobList
   */
  public function listJobs($projectId, $optParams = array())
  {
    $params = array('projectId' => $projectId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Bigquery_JobList");
  }
  /**
   *  (jobs.query)
   *
   * @param Google_Service_Bigquery_QueryRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Bigquery_QueryResponse
   */
  public function query($projectId, Google_Service_Bigquery_QueryRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('query', array($params), "Google_Service_Bigquery_QueryResponse");
  }
}
