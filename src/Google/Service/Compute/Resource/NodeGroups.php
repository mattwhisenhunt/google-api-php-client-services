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
 * The "nodeGroups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $nodeGroups = $computeService->nodeGroups;
 *  </code>
 */
class Google_Service_Compute_Resource_NodeGroups extends Google_Service_Resource
{
  /**
   *  (nodeGroups.addNodes)
   *
   * @param Google_Service_Compute_NodeGroupsAddNodesRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function addNodes($project, $zone, $nodeGroup, Google_Service_Compute_NodeGroupsAddNodesRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'nodeGroup' => $nodeGroup ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addNodes', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (nodeGroups.aggregatedList)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_NodeGroupAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), "Google_Service_Compute_NodeGroupAggregatedList");
  }
  /**
   *  (nodeGroups.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $zone, $nodeGroup, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'nodeGroup' => $nodeGroup);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (nodeGroups.deleteNodes)
   *
   * @param Google_Service_Compute_NodeGroupsDeleteNodesRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function deleteNodes($project, $zone, $nodeGroup, Google_Service_Compute_NodeGroupsDeleteNodesRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'nodeGroup' => $nodeGroup ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('deleteNodes', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (nodeGroups.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_NodeGroup
   */
  public function get($project, $zone, $nodeGroup, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'nodeGroup' => $nodeGroup);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_NodeGroup");
  }
  /**
   *  (nodeGroups.insert)
   *
   * @param Google_Service_Compute_NodeGroup $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, $zone, $initialNodeCount, Google_Service_Compute_NodeGroup $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'initialNodeCount' => $initialNodeCount ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (nodeGroups.listNodeGroups)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_NodeGroupList
   */
  public function listNodeGroups($project, $zone, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_NodeGroupList");
  }
  /**
   *  (nodeGroups.listNodes)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_NodeGroupsListNodes
   */
  public function listNodes($project, $zone, $nodeGroup, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'nodeGroup' => $nodeGroup);
    $params = array_merge($params, $optParams);
    return $this->call('listNodes', array($params), "Google_Service_Compute_NodeGroupsListNodes");
  }
  /**
   *  (nodeGroups.setNodeTemplate)
   *
   * @param Google_Service_Compute_NodeGroupsSetNodeTemplateRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setNodeTemplate($project, $zone, $nodeGroup, Google_Service_Compute_NodeGroupsSetNodeTemplateRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'nodeGroup' => $nodeGroup ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setNodeTemplate', array($params), "Google_Service_Compute_Operation");
  }
}
