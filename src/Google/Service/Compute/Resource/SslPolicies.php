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
 * The "sslPolicies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $sslPolicies = $computeService->sslPolicies;
 *  </code>
 */
class Google_Service_Compute_Resource_SslPolicies extends Google_Service_Resource
{
  /**
   *  (sslPolicies.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $sslPolicy, $optParams = array())
  {
    $params = array('project' => $project, 'sslPolicy' => $sslPolicy);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (sslPolicies.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_SslPolicy
   */
  public function get($project, $sslPolicy, $optParams = array())
  {
    $params = array('project' => $project, 'sslPolicy' => $sslPolicy);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_SslPolicy");
  }
  /**
   *  (sslPolicies.insert)
   *
   * @param Google_Service_Compute_SslPolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_SslPolicy $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (sslPolicies.listSslPolicies)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_SslPoliciesList
   */
  public function listSslPolicies($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_SslPoliciesList");
  }
  /**
   *  (sslPolicies.listAvailableFeatures)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_SslPoliciesListAvailableFeaturesResponse
   */
  public function listAvailableFeatures($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('listAvailableFeatures', array($params), "Google_Service_Compute_SslPoliciesListAvailableFeaturesResponse");
  }
  /**
   *  (sslPolicies.patch)
   *
   * @param Google_Service_Compute_SslPolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function patch($project, $sslPolicy, Google_Service_Compute_SslPolicy $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'sslPolicy' => $sslPolicy ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Compute_Operation");
  }
}
