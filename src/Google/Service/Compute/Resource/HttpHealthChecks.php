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
 * The "httpHealthChecks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $httpHealthChecks = $computeService->httpHealthChecks;
 *  </code>
 */
class Google_Service_Compute_Resource_HttpHealthChecks extends Google_Service_Resource
{
  /**
   *  (httpHealthChecks.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $httpHealthCheck, $optParams = array())
  {
    $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (httpHealthChecks.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_HttpHealthCheck
   */
  public function get($project, $httpHealthCheck, $optParams = array())
  {
    $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_HttpHealthCheck");
  }
  /**
   *  (httpHealthChecks.insert)
   *
   * @param Google_Service_Compute_HttpHealthCheck $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_HttpHealthCheck $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (httpHealthChecks.listHttpHealthChecks)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_HttpHealthCheckList
   */
  public function listHttpHealthChecks($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_HttpHealthCheckList");
  }
  /**
   *  (httpHealthChecks.patch)
   *
   * @param Google_Service_Compute_HttpHealthCheck $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function patch($project, $httpHealthCheck, Google_Service_Compute_HttpHealthCheck $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (httpHealthChecks.update)
   *
   * @param Google_Service_Compute_HttpHealthCheck $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function update($project, $httpHealthCheck, Google_Service_Compute_HttpHealthCheck $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Compute_Operation");
  }
}
