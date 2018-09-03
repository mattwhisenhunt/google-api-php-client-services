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
 * The "pools" collection of methods.
 * Typical usage is:
 *  <code>
 *   $replicapoolService = new Google_Service_Replicapool(...);
 *   $pools = $replicapoolService->pools;
 *  </code>
 */
class Google_Service_Replicapool_Resource_Pools extends Google_Service_Resource
{
  /**
   *  (pools.delete)
   *
   * @param Google_Service_Replicapool_PoolsDeleteRequest $postBody
   * @param array $optParams Optional parameters.

   */
  public function delete($projectName, $zone, $poolName, Google_Service_Replicapool_PoolsDeleteRequest $postBody, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'poolName' => $poolName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (pools.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Replicapool_Pool
   */
  public function get($projectName, $zone, $poolName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'poolName' => $poolName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Replicapool_Pool");
  }
  /**
   *  (pools.insert)
   *
   * @param Google_Service_Replicapool_Pool $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Replicapool_Pool
   */
  public function insert($projectName, $zone, Google_Service_Replicapool_Pool $postBody, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Replicapool_Pool");
  }
  /**
   *  (pools.listPools)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Replicapool_PoolsListResponse
   */
  public function listPools($projectName, $zone, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Replicapool_PoolsListResponse");
  }
  /**
   *  (pools.resize)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Replicapool_Pool
   */
  public function resize($projectName, $zone, $poolName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'poolName' => $poolName);
    $params = array_merge($params, $optParams);
    return $this->call('resize', array($params), "Google_Service_Replicapool_Pool");
  }
  /**
   *  (pools.updatetemplate)
   *
   * @param Google_Service_Replicapool_Template $postBody
   * @param array $optParams Optional parameters.

   */
  public function updatetemplate($projectName, $zone, $poolName, Google_Service_Replicapool_Template $postBody, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'poolName' => $poolName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updatetemplate', array($params));
  }
}
