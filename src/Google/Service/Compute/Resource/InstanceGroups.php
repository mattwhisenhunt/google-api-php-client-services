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
 * The "instanceGroups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $instanceGroups = $computeService->instanceGroups;
 *  </code>
 */
class Google_Service_Compute_Resource_InstanceGroups extends Google_Service_Resource
{
  /**
   *  (instanceGroups.addInstances)
   *
   * @param Google_Service_Compute_InstanceGroupsAddInstancesRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function addInstances($project, $zone, $instanceGroup, Google_Service_Compute_InstanceGroupsAddInstancesRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instanceGroup' => $instanceGroup ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addInstances', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instanceGroups.aggregatedList)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_InstanceGroupAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), "Google_Service_Compute_InstanceGroupAggregatedList");
  }
  /**
   *  (instanceGroups.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $zone, $instanceGroup, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instanceGroup' => $instanceGroup);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instanceGroups.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_InstanceGroup
   */
  public function get($project, $zone, $instanceGroup, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instanceGroup' => $instanceGroup);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_InstanceGroup");
  }
  /**
   *  (instanceGroups.insert)
   *
   * @param Google_Service_Compute_InstanceGroup $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, $zone, Google_Service_Compute_InstanceGroup $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instanceGroups.listInstanceGroups)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_InstanceGroupList
   */
  public function listInstanceGroups($project, $zone, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_InstanceGroupList");
  }
  /**
   *  (instanceGroups.listInstances)
   *
   * @param Google_Service_Compute_InstanceGroupsListInstancesRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_InstanceGroupsListInstances
   */
  public function listInstances($project, $zone, $instanceGroup, Google_Service_Compute_InstanceGroupsListInstancesRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instanceGroup' => $instanceGroup ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('listInstances', array($params), "Google_Service_Compute_InstanceGroupsListInstances");
  }
  /**
   *  (instanceGroups.removeInstances)
   *
   * @param Google_Service_Compute_InstanceGroupsRemoveInstancesRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function removeInstances($project, $zone, $instanceGroup, Google_Service_Compute_InstanceGroupsRemoveInstancesRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instanceGroup' => $instanceGroup ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('removeInstances', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instanceGroups.setNamedPorts)
   *
   * @param Google_Service_Compute_InstanceGroupsSetNamedPortsRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setNamedPorts($project, $zone, $instanceGroup, Google_Service_Compute_InstanceGroupsSetNamedPortsRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instanceGroup' => $instanceGroup ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setNamedPorts', array($params), "Google_Service_Compute_Operation");
  }
}
