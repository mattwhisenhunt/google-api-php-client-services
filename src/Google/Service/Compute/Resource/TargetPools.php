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
 * The "targetPools" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetPools = $computeService->targetPools;
 *  </code>
 */
class Google_Service_Compute_Resource_TargetPools extends Google_Service_Resource
{
  /**
   *  (targetPools.addHealthCheck)
   *
   * @param Google_Service_Compute_TargetPoolsAddHealthCheckRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function addHealthCheck($project, $region, $targetPool, Google_Service_Compute_TargetPoolsAddHealthCheckRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addHealthCheck', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetPools.addInstance)
   *
   * @param Google_Service_Compute_TargetPoolsAddInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function addInstance($project, $region, $targetPool, Google_Service_Compute_TargetPoolsAddInstanceRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addInstance', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetPools.aggregatedList)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_TargetPoolAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), "Google_Service_Compute_TargetPoolAggregatedList");
  }
  /**
   *  (targetPools.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $region, $targetPool, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetPools.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_TargetPool
   */
  public function get($project, $region, $targetPool, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_TargetPool");
  }
  /**
   *  (targetPools.getHealth)
   *
   * @param Google_Service_Compute_InstanceReference $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_TargetPoolInstanceHealth
   */
  public function getHealth($project, $region, $targetPool, Google_Service_Compute_InstanceReference $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getHealth', array($params), "Google_Service_Compute_TargetPoolInstanceHealth");
  }
  /**
   *  (targetPools.insert)
   *
   * @param Google_Service_Compute_TargetPool $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, $region, Google_Service_Compute_TargetPool $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetPools.listTargetPools)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_TargetPoolList
   */
  public function listTargetPools($project, $region, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_TargetPoolList");
  }
  /**
   *  (targetPools.removeHealthCheck)
   *
   * @param Google_Service_Compute_TargetPoolsRemoveHealthCheckRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function removeHealthCheck($project, $region, $targetPool, Google_Service_Compute_TargetPoolsRemoveHealthCheckRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('removeHealthCheck', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetPools.removeInstance)
   *
   * @param Google_Service_Compute_TargetPoolsRemoveInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function removeInstance($project, $region, $targetPool, Google_Service_Compute_TargetPoolsRemoveInstanceRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('removeInstance', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetPools.setBackup)
   *
   * @param Google_Service_Compute_TargetReference $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setBackup($project, $region, $targetPool, Google_Service_Compute_TargetReference $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setBackup', array($params), "Google_Service_Compute_Operation");
  }
}
