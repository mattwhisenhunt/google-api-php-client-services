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
 * The "backendServices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $backendServices = $computeService->backendServices;
 *  </code>
 */
class Google_Service_Compute_Resource_BackendServices extends Google_Service_Resource
{
  /**
   *  (backendServices.addSignedUrlKey)
   *
   * @param Google_Service_Compute_SignedUrlKey $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function addSignedUrlKey($project, $backendService, Google_Service_Compute_SignedUrlKey $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'backendService' => $backendService ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addSignedUrlKey', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (backendServices.aggregatedList)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_BackendServiceAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), "Google_Service_Compute_BackendServiceAggregatedList");
  }
  /**
   *  (backendServices.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $backendService, $optParams = array())
  {
    $params = array('project' => $project, 'backendService' => $backendService);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (backendServices.deleteSignedUrlKey)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function deleteSignedUrlKey($project, $backendService, $keyName, $optParams = array())
  {
    $params = array('project' => $project, 'backendService' => $backendService, 'keyName' => $keyName);
    $params = array_merge($params, $optParams);
    return $this->call('deleteSignedUrlKey', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (backendServices.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_BackendService
   */
  public function get($project, $backendService, $optParams = array())
  {
    $params = array('project' => $project, 'backendService' => $backendService);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_BackendService");
  }
  /**
   *  (backendServices.getHealth)
   *
   * @param Google_Service_Compute_ResourceGroupReference $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_BackendServiceGroupHealth
   */
  public function getHealth($project, $backendService, Google_Service_Compute_ResourceGroupReference $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'backendService' => $backendService ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getHealth', array($params), "Google_Service_Compute_BackendServiceGroupHealth");
  }
  /**
   *  (backendServices.insert)
   *
   * @param Google_Service_Compute_BackendService $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_BackendService $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (backendServices.listBackendServices)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_BackendServiceList
   */
  public function listBackendServices($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_BackendServiceList");
  }
  /**
   *  (backendServices.patch)
   *
   * @param Google_Service_Compute_BackendService $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function patch($project, $backendService, Google_Service_Compute_BackendService $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'backendService' => $backendService ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (backendServices.setSecurityPolicy)
   *
   * @param Google_Service_Compute_SecurityPolicyReference $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setSecurityPolicy($project, $backendService, Google_Service_Compute_SecurityPolicyReference $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'backendService' => $backendService ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setSecurityPolicy', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (backendServices.update)
   *
   * @param Google_Service_Compute_BackendService $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function update($project, $backendService, Google_Service_Compute_BackendService $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'backendService' => $backendService ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Compute_Operation");
  }
}
