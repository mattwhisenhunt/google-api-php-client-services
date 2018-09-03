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
 * The "httpsHealthChecks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $httpsHealthChecks = $computeService->httpsHealthChecks;
 *  </code>
 */
class Google_Service_Compute_Resource_HttpsHealthChecks extends Google_Service_Resource
{
  /**
   *  (httpsHealthChecks.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $httpsHealthCheck, $optParams = array())
  {
    $params = array('project' => $project, 'httpsHealthCheck' => $httpsHealthCheck);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (httpsHealthChecks.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_HttpsHealthCheck
   */
  public function get($project, $httpsHealthCheck, $optParams = array())
  {
    $params = array('project' => $project, 'httpsHealthCheck' => $httpsHealthCheck);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_HttpsHealthCheck");
  }
  /**
   *  (httpsHealthChecks.insert)
   *
   * @param Google_Service_Compute_HttpsHealthCheck $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_HttpsHealthCheck $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (httpsHealthChecks.listHttpsHealthChecks)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_HttpsHealthCheckList
   */
  public function listHttpsHealthChecks($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_HttpsHealthCheckList");
  }
  /**
   *  (httpsHealthChecks.patch)
   *
   * @param Google_Service_Compute_HttpsHealthCheck $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function patch($project, $httpsHealthCheck, Google_Service_Compute_HttpsHealthCheck $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'httpsHealthCheck' => $httpsHealthCheck ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (httpsHealthChecks.update)
   *
   * @param Google_Service_Compute_HttpsHealthCheck $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function update($project, $httpsHealthCheck, Google_Service_Compute_HttpsHealthCheck $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'httpsHealthCheck' => $httpsHealthCheck ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Compute_Operation");
  }
}
