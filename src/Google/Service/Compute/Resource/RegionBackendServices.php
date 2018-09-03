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
 * The "regionBackendServices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $regionBackendServices = $computeService->regionBackendServices;
 *  </code>
 */
class Google_Service_Compute_Resource_RegionBackendServices extends Google_Service_Resource
{
  /**
   *  (regionBackendServices.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $region, $backendService, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'backendService' => $backendService);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionBackendServices.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_BackendService
   */
  public function get($project, $region, $backendService, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'backendService' => $backendService);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_BackendService");
  }
  /**
   *  (regionBackendServices.getHealth)
   *
   * @param Google_Service_Compute_ResourceGroupReference $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_BackendServiceGroupHealth
   */
  public function getHealth($project, $region, $backendService, Google_Service_Compute_ResourceGroupReference $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'backendService' => $backendService ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getHealth', array($params), "Google_Service_Compute_BackendServiceGroupHealth");
  }
  /**
   *  (regionBackendServices.insert)
   *
   * @param Google_Service_Compute_BackendService $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, $region, Google_Service_Compute_BackendService $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionBackendServices.listRegionBackendServices)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_BackendServiceList
   */
  public function listRegionBackendServices($project, $region, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_BackendServiceList");
  }
  /**
   *  (regionBackendServices.patch)
   *
   * @param Google_Service_Compute_BackendService $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function patch($project, $region, $backendService, Google_Service_Compute_BackendService $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'backendService' => $backendService ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionBackendServices.update)
   *
   * @param Google_Service_Compute_BackendService $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function update($project, $region, $backendService, Google_Service_Compute_BackendService $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'backendService' => $backendService ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Compute_Operation");
  }
}
