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
class Google_Service_Container_Resource_ProjectsLocationsClusters extends Google_Service_Resource
{
  /**
   *  (clusters.completeIpRotation)
   *
   * @param Google_Service_Container_CompleteIPRotationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function completeIpRotation($name, Google_Service_Container_CompleteIPRotationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
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
  public function create($parent, Google_Service_Container_CreateClusterRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
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
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
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
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Container_Cluster");
  }
  /**
   *  (clusters.listProjectsLocationsClusters)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Container_ListClustersResponse
   */
  public function listProjectsLocationsClusters($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Container_ListClustersResponse");
  }
  /**
   *  (clusters.setAddons)
   *
   * @param Google_Service_Container_SetAddonsConfigRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function setAddons($name, Google_Service_Container_SetAddonsConfigRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setAddons', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.setLegacyAbac)
   *
   * @param Google_Service_Container_SetLegacyAbacRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function setLegacyAbac($name, Google_Service_Container_SetLegacyAbacRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setLegacyAbac', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.setLocations)
   *
   * @param Google_Service_Container_SetLocationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function setLocations($name, Google_Service_Container_SetLocationsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setLocations', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.setLogging)
   *
   * @param Google_Service_Container_SetLoggingServiceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function setLogging($name, Google_Service_Container_SetLoggingServiceRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setLogging', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.setMaintenancePolicy)
   *
   * @param Google_Service_Container_SetMaintenancePolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function setMaintenancePolicy($name, Google_Service_Container_SetMaintenancePolicyRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
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
  public function setMasterAuth($name, Google_Service_Container_SetMasterAuthRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setMasterAuth', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.setMonitoring)
   *
   * @param Google_Service_Container_SetMonitoringServiceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function setMonitoring($name, Google_Service_Container_SetMonitoringServiceRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setMonitoring', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.setNetworkPolicy)
   *
   * @param Google_Service_Container_SetNetworkPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function setNetworkPolicy($name, Google_Service_Container_SetNetworkPolicyRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setNetworkPolicy', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.setResourceLabels)
   *
   * @param Google_Service_Container_SetLabelsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function setResourceLabels($name, Google_Service_Container_SetLabelsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setResourceLabels', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.startIpRotation)
   *
   * @param Google_Service_Container_StartIPRotationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function startIpRotation($name, Google_Service_Container_StartIPRotationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
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
  public function update($name, Google_Service_Container_UpdateClusterRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (clusters.updateMaster)
   *
   * @param Google_Service_Container_UpdateMasterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function updateMaster($name, Google_Service_Container_UpdateMasterRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateMaster', array($params), "Google_Service_Container_Operation");
  }
}
