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
 *   $dataprocService = new Google_Service_Dataproc(...);
 *   $jobs = $dataprocService->jobs;
 *  </code>
 */
class Google_Service_Dataproc_Resource_ProjectsRegionsJobs extends Google_Service_Resource
{
  /**
   *  (jobs.cancel)
   *
   * @param Google_Service_Dataproc_CancelJobRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_Job
   */
  public function cancel($projectId, $region, $jobId, Google_Service_Dataproc_CancelJobRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region, 'jobId' => $jobId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params), "Google_Service_Dataproc_Job");
  }
  /**
   *  (jobs.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_DataprocEmpty
   */
  public function delete($projectId, $region, $jobId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region, 'jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Dataproc_DataprocEmpty");
  }
  /**
   *  (jobs.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_Job
   */
  public function get($projectId, $region, $jobId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region, 'jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Dataproc_Job");
  }
  /**
   *  (jobs.getIamPolicy)
   *
   * @param Google_Service_Dataproc_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_Policy
   */
  public function getIamPolicy($resource, Google_Service_Dataproc_GetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_Dataproc_Policy");
  }
  /**
   *  (jobs.listProjectsRegionsJobs)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dataproc_ListJobsResponse
   */
  public function listProjectsRegionsJobs($projectId, $region, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dataproc_ListJobsResponse");
  }
  /**
   *  (jobs.patch)
   *
   * @param Google_Service_Dataproc_Job $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dataproc_Job
   */
  public function patch($projectId, $region, $jobId, Google_Service_Dataproc_Job $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region, 'jobId' => $jobId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Dataproc_Job");
  }
  /**
   *  (jobs.setIamPolicy)
   *
   * @param Google_Service_Dataproc_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_Policy
   */
  public function setIamPolicy($resource, Google_Service_Dataproc_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_Dataproc_Policy");
  }
  /**
   *  (jobs.submit)
   *
   * @param Google_Service_Dataproc_SubmitJobRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_Job
   */
  public function submit($projectId, $region, Google_Service_Dataproc_SubmitJobRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('submit', array($params), "Google_Service_Dataproc_Job");
  }
  /**
   *  (jobs.testIamPermissions)
   *
   * @param Google_Service_Dataproc_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_Dataproc_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_Dataproc_TestIamPermissionsResponse");
  }
}
