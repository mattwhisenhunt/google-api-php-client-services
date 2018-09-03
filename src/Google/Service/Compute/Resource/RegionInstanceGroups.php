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
 * The "regionInstanceGroups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $regionInstanceGroups = $computeService->regionInstanceGroups;
 *  </code>
 */
class Google_Service_Compute_Resource_RegionInstanceGroups extends Google_Service_Resource
{
  /**
   *  (regionInstanceGroups.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_InstanceGroup
   */
  public function get($project, $region, $instanceGroup, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'instanceGroup' => $instanceGroup);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_InstanceGroup");
  }
  /**
   *  (regionInstanceGroups.listRegionInstanceGroups)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_RegionInstanceGroupList
   */
  public function listRegionInstanceGroups($project, $region, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_RegionInstanceGroupList");
  }
  /**
   *  (regionInstanceGroups.listInstances)
   *
   * @param Google_Service_Compute_RegionInstanceGroupsListInstancesRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_RegionInstanceGroupsListInstances
   */
  public function listInstances($project, $region, $instanceGroup, Google_Service_Compute_RegionInstanceGroupsListInstancesRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'instanceGroup' => $instanceGroup ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('listInstances', array($params), "Google_Service_Compute_RegionInstanceGroupsListInstances");
  }
  /**
   *  (regionInstanceGroups.setNamedPorts)
   *
   * @param Google_Service_Compute_RegionInstanceGroupsSetNamedPortsRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setNamedPorts($project, $region, $instanceGroup, Google_Service_Compute_RegionInstanceGroupsSetNamedPortsRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'instanceGroup' => $instanceGroup ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setNamedPorts', array($params), "Google_Service_Compute_Operation");
  }
}
