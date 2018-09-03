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
 * The "replicas" collection of methods.
 * Typical usage is:
 *  <code>
 *   $replicapoolService = new Google_Service_Replicapool(...);
 *   $replicas = $replicapoolService->replicas;
 *  </code>
 */
class Google_Service_Replicapool_Resource_Replicas extends Google_Service_Resource
{
  /**
   *  (replicas.delete)
   *
   * @param Google_Service_Replicapool_ReplicasDeleteRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Replicapool_Replica
   */
  public function delete($projectName, $zone, $poolName, $replicaName, Google_Service_Replicapool_ReplicasDeleteRequest $postBody, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'poolName' => $poolName, 'replicaName' => $replicaName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Replicapool_Replica");
  }
  /**
   *  (replicas.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Replicapool_Replica
   */
  public function get($projectName, $zone, $poolName, $replicaName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'poolName' => $poolName, 'replicaName' => $replicaName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Replicapool_Replica");
  }
  /**
   *  (replicas.listReplicas)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Replicapool_ReplicasListResponse
   */
  public function listReplicas($projectName, $zone, $poolName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'poolName' => $poolName);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Replicapool_ReplicasListResponse");
  }
  /**
   *  (replicas.restart)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Replicapool_Replica
   */
  public function restart($projectName, $zone, $poolName, $replicaName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'poolName' => $poolName, 'replicaName' => $replicaName);
    $params = array_merge($params, $optParams);
    return $this->call('restart', array($params), "Google_Service_Replicapool_Replica");
  }
}
