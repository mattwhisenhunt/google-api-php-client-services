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
 * The "rollingUpdates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $replicapoolupdaterService = new Google_Service_Replicapoolupdater(...);
 *   $rollingUpdates = $replicapoolupdaterService->rollingUpdates;
 *  </code>
 */
class Google_Service_Replicapoolupdater_Resource_RollingUpdates extends Google_Service_Resource
{
  /**
   *  (rollingUpdates.cancel)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Replicapoolupdater_Operation
   */
  public function cancel($project, $zone, $rollingUpdate, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'rollingUpdate' => $rollingUpdate);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params), "Google_Service_Replicapoolupdater_Operation");
  }
  /**
   *  (rollingUpdates.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Replicapoolupdater_RollingUpdate
   */
  public function get($project, $zone, $rollingUpdate, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'rollingUpdate' => $rollingUpdate);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Replicapoolupdater_RollingUpdate");
  }
  /**
   *  (rollingUpdates.insert)
   *
   * @param Google_Service_Replicapoolupdater_RollingUpdate $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Replicapoolupdater_Operation
   */
  public function insert($project, $zone, Google_Service_Replicapoolupdater_RollingUpdate $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Replicapoolupdater_Operation");
  }
  /**
   *  (rollingUpdates.listRollingUpdates)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Replicapoolupdater_RollingUpdateList
   */
  public function listRollingUpdates($project, $zone, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Replicapoolupdater_RollingUpdateList");
  }
  /**
   *  (rollingUpdates.listInstanceUpdates)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Replicapoolupdater_InstanceUpdateList
   */
  public function listInstanceUpdates($project, $zone, $rollingUpdate, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'rollingUpdate' => $rollingUpdate);
    $params = array_merge($params, $optParams);
    return $this->call('listInstanceUpdates', array($params), "Google_Service_Replicapoolupdater_InstanceUpdateList");
  }
  /**
   *  (rollingUpdates.pause)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Replicapoolupdater_Operation
   */
  public function pause($project, $zone, $rollingUpdate, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'rollingUpdate' => $rollingUpdate);
    $params = array_merge($params, $optParams);
    return $this->call('pause', array($params), "Google_Service_Replicapoolupdater_Operation");
  }
  /**
   *  (rollingUpdates.resume)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Replicapoolupdater_Operation
   */
  public function resume($project, $zone, $rollingUpdate, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'rollingUpdate' => $rollingUpdate);
    $params = array_merge($params, $optParams);
    return $this->call('resume', array($params), "Google_Service_Replicapoolupdater_Operation");
  }
  /**
   *  (rollingUpdates.rollback)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Replicapoolupdater_Operation
   */
  public function rollback($project, $zone, $rollingUpdate, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'rollingUpdate' => $rollingUpdate);
    $params = array_merge($params, $optParams);
    return $this->call('rollback', array($params), "Google_Service_Replicapoolupdater_Operation");
  }
}
