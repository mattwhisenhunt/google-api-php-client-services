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
 * The "regionInstanceGroupManagers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $regionInstanceGroupManagers = $computeService->regionInstanceGroupManagers;
 *  </code>
 */
class Google_Service_Compute_Resource_RegionInstanceGroupManagers extends Google_Service_Resource
{
  /**
   *  (regionInstanceGroupManagers.abandonInstances)
   *
   * @param Google_Service_Compute_RegionInstanceGroupManagersAbandonInstancesRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function abandonInstances($project, $region, $instanceGroupManager, Google_Service_Compute_RegionInstanceGroupManagersAbandonInstancesRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'instanceGroupManager' => $instanceGroupManager ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('abandonInstances', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionInstanceGroupManagers.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $region, $instanceGroupManager, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'instanceGroupManager' => $instanceGroupManager);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionInstanceGroupManagers.deleteInstances)
   *
   * @param Google_Service_Compute_RegionInstanceGroupManagersDeleteInstancesRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function deleteInstances($project, $region, $instanceGroupManager, Google_Service_Compute_RegionInstanceGroupManagersDeleteInstancesRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'instanceGroupManager' => $instanceGroupManager ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('deleteInstances', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionInstanceGroupManagers.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_InstanceGroupManager
   */
  public function get($project, $region, $instanceGroupManager, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'instanceGroupManager' => $instanceGroupManager);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_InstanceGroupManager");
  }
  /**
   *  (regionInstanceGroupManagers.insert)
   *
   * @param Google_Service_Compute_InstanceGroupManager $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, $region, Google_Service_Compute_InstanceGroupManager $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionInstanceGroupManagers.listRegionInstanceGroupManagers)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_RegionInstanceGroupManagerList
   */
  public function listRegionInstanceGroupManagers($project, $region, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_RegionInstanceGroupManagerList");
  }
  /**
   *  (regionInstanceGroupManagers.listManagedInstances)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_RegionInstanceGroupManagersListInstancesResponse
   */
  public function listManagedInstances($project, $region, $instanceGroupManager, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'instanceGroupManager' => $instanceGroupManager);
    $params = array_merge($params, $optParams);
    return $this->call('listManagedInstances', array($params), "Google_Service_Compute_RegionInstanceGroupManagersListInstancesResponse");
  }
  /**
   *  (regionInstanceGroupManagers.recreateInstances)
   *
   * @param Google_Service_Compute_RegionInstanceGroupManagersRecreateRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function recreateInstances($project, $region, $instanceGroupManager, Google_Service_Compute_RegionInstanceGroupManagersRecreateRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'instanceGroupManager' => $instanceGroupManager ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('recreateInstances', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionInstanceGroupManagers.resize)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function resize($project, $region, $instanceGroupManager, $size, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'instanceGroupManager' => $instanceGroupManager, 'size' => $size);
    $params = array_merge($params, $optParams);
    return $this->call('resize', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionInstanceGroupManagers.setInstanceTemplate)
   *
   * @param Google_Service_Compute_RegionInstanceGroupManagersSetTemplateRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setInstanceTemplate($project, $region, $instanceGroupManager, Google_Service_Compute_RegionInstanceGroupManagersSetTemplateRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'instanceGroupManager' => $instanceGroupManager ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setInstanceTemplate', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionInstanceGroupManagers.setTargetPools)
   *
   * @param Google_Service_Compute_RegionInstanceGroupManagersSetTargetPoolsRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setTargetPools($project, $region, $instanceGroupManager, Google_Service_Compute_RegionInstanceGroupManagersSetTargetPoolsRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'instanceGroupManager' => $instanceGroupManager ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setTargetPools', array($params), "Google_Service_Compute_Operation");
  }
}
