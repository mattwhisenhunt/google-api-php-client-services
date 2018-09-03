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
 * The "clusters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $containerService = new Google_Service_Container(...);
 *   $clusters = $containerService->clusters;
 *  </code>
 */
class Google_Service_Container_Resource_ProjectsZonesClusters extends Google_Service_Resource
{
  /**
   *  (clusters.addons)
   *
   * @param Google_Service_Container_SetAddonsConfigRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function addons($projectId, $zone, $clusterId, Google_Service_Container_SetAddonsConfigRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone, 'clusterId' => $clusterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addons', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.completeIpRotation)
   *
   * @param Google_Service_Container_CompleteIPRotationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function completeIpRotation($projectId, $zone, $clusterId, Google_Service_Container_CompleteIPRotationRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone, 'clusterId' => $clusterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('completeIpRotation', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.create)
   *
   * @param Google_Service_Container_CreateClusterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function create($projectId, $zone, Google_Service_Container_CreateClusterRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Container_Operation
   */
  public function delete($projectId, $zone, $clusterId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone, 'clusterId' => $clusterId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Container_Cluster
   */
  public function get($projectId, $zone, $clusterId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone, 'clusterId' => $clusterId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Container_Cluster");
  }
  /**
   *  (clusters.legacyAbac)
   *
   * @param Google_Service_Container_SetLegacyAbacRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function legacyAbac($projectId, $zone, $clusterId, Google_Service_Container_SetLegacyAbacRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone, 'clusterId' => $clusterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('legacyAbac', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.listProjectsZonesClusters)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Container_ListClustersResponse
   */
  public function listProjectsZonesClusters($projectId, $zone, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Container_ListClustersResponse");
  }
  /**
   *  (clusters.locations)
   *
   * @param Google_Service_Container_SetLocationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function locations($projectId, $zone, $clusterId, Google_Service_Container_SetLocationsRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone, 'clusterId' => $clusterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('locations', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.logging)
   *
   * @param Google_Service_Container_SetLoggingServiceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function logging($projectId, $zone, $clusterId, Google_Service_Container_SetLoggingServiceRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone, 'clusterId' => $clusterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('logging', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.master)
   *
   * @param Google_Service_Container_UpdateMasterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function master($projectId, $zone, $clusterId, Google_Service_Container_UpdateMasterRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone, 'clusterId' => $clusterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('master', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.monitoring)
   *
   * @param Google_Service_Container_SetMonitoringServiceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function monitoring($projectId, $zone, $clusterId, Google_Service_Container_SetMonitoringServiceRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone, 'clusterId' => $clusterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('monitoring', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.resourceLabels)
   *
   * @param Google_Service_Container_SetLabelsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function resourceLabels($projectId, $zone, $clusterId, Google_Service_Container_SetLabelsRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone, 'clusterId' => $clusterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('resourceLabels', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.setMaintenancePolicy)
   *
   * @param Google_Service_Container_SetMaintenancePolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function setMaintenancePolicy($projectId, $zone, $clusterId, Google_Service_Container_SetMaintenancePolicyRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone, 'clusterId' => $clusterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setMaintenancePolicy', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.setMasterAuth)
   *
   * @param Google_Service_Container_SetMasterAuthRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function setMasterAuth($projectId, $zone, $clusterId, Google_Service_Container_SetMasterAuthRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone, 'clusterId' => $clusterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setMasterAuth', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.setNetworkPolicy)
   *
   * @param Google_Service_Container_SetNetworkPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function setNetworkPolicy($projectId, $zone, $clusterId, Google_Service_Container_SetNetworkPolicyRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone, 'clusterId' => $clusterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setNetworkPolicy', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.startIpRotation)
   *
   * @param Google_Service_Container_StartIPRotationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function startIpRotation($projectId, $zone, $clusterId, Google_Service_Container_StartIPRotationRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone, 'clusterId' => $clusterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('startIpRotation', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.update)
   *
   * @param Google_Service_Container_UpdateClusterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function update($projectId, $zone, $clusterId, Google_Service_Container_UpdateClusterRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'zone' => $zone, 'clusterId' => $clusterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Container_Operation");
  }
}
