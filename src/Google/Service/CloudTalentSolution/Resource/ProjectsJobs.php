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
 *   $jobsService = new Google_Service_CloudTalentSolution(...);
 *   $jobs = $jobsService->jobs;
 *  </code>
 */
class Google_Service_CloudTalentSolution_Resource_ProjectsJobs extends Google_Service_Resource
{
  /**
   *  (jobs.batchDelete)
   *
   * @param Google_Service_CloudTalentSolution_BatchDeleteJobsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTalentSolution_JobsEmpty
   */
  public function batchDelete($parent, Google_Service_CloudTalentSolution_BatchDeleteJobsRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', array($params), "Google_Service_CloudTalentSolution_JobsEmpty");
  }
  /**
   *  (jobs.create)
   *
   * @param Google_Service_CloudTalentSolution_CreateJobRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTalentSolution_Job
   */
  public function create($parent, Google_Service_CloudTalentSolution_CreateJobRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudTalentSolution_Job");
  }
  /**
   *  (jobs.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTalentSolution_JobsEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_CloudTalentSolution_JobsEmpty");
  }
  /**
   *  (jobs.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTalentSolution_Job
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudTalentSolution_Job");
  }
  /**
   *  (jobs.listProjectsJobs)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudTalentSolution_ListJobsResponse
   */
  public function listProjectsJobs($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudTalentSolution_ListJobsResponse");
  }
  /**
   *  (jobs.patch)
   *
   * @param Google_Service_CloudTalentSolution_UpdateJobRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTalentSolution_Job
   */
  public function patch($name, Google_Service_CloudTalentSolution_UpdateJobRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudTalentSolution_Job");
  }
  /**
   *  (jobs.search)
   *
   * @param Google_Service_CloudTalentSolution_SearchJobsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTalentSolution_SearchJobsResponse
   */
  public function search($parent, Google_Service_CloudTalentSolution_SearchJobsRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_CloudTalentSolution_SearchJobsResponse");
  }
  /**
   *  (jobs.searchForAlert)
   *
   * @param Google_Service_CloudTalentSolution_SearchJobsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTalentSolution_SearchJobsResponse
   */
  public function searchForAlert($parent, Google_Service_CloudTalentSolution_SearchJobsRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('searchForAlert', array($params), "Google_Service_CloudTalentSolution_SearchJobsResponse");
  }
}
