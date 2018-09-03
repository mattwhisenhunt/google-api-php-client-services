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
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $instances = $computeService->instances;
 *  </code>
 */
class Google_Service_Compute_Resource_Instances extends Google_Service_Resource
{
  /**
   *  (instances.addAccessConfig)
   *
   * @param Google_Service_Compute_AccessConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function addAccessConfig($project, $zone, $instance, $networkInterface, Google_Service_Compute_AccessConfig $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'networkInterface' => $networkInterface ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addAccessConfig', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.aggregatedList)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_InstanceAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), "Google_Service_Compute_InstanceAggregatedList");
  }
  /**
   *  (instances.attachDisk)
   *
   * @param Google_Service_Compute_AttachedDisk $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function attachDisk($project, $zone, $instance, Google_Service_Compute_AttachedDisk $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('attachDisk', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $zone, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.deleteAccessConfig)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function deleteAccessConfig($project, $zone, $instance, $accessConfig, $networkInterface, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'accessConfig' => $accessConfig, 'networkInterface' => $networkInterface);
    $params = array_merge($params, $optParams);
    return $this->call('deleteAccessConfig', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.detachDisk)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function detachDisk($project, $zone, $instance, $deviceName, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'deviceName' => $deviceName);
    $params = array_merge($params, $optParams);
    return $this->call('detachDisk', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Instance
   */
  public function get($project, $zone, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_Instance");
  }
  /**
   *  (instances.getSerialPortOutput)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_SerialPortOutput
   */
  public function getSerialPortOutput($project, $zone, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('getSerialPortOutput', array($params), "Google_Service_Compute_SerialPortOutput");
  }
  /**
   *  (instances.insert)
   *
   * @param Google_Service_Compute_Instance $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, $zone, Google_Service_Compute_Instance $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.listInstances)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_InstanceList
   */
  public function listInstances($project, $zone, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_InstanceList");
  }
  /**
   *  (instances.listReferrers)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_InstanceListReferrers
   */
  public function listReferrers($project, $zone, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('listReferrers', array($params), "Google_Service_Compute_InstanceListReferrers");
  }
  /**
   *  (instances.reset)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function reset($project, $zone, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('reset', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.setDeletionProtection)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setDeletionProtection($project, $zone, $resource, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'resource' => $resource);
    $params = array_merge($params, $optParams);
    return $this->call('setDeletionProtection', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.setDiskAutoDelete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setDiskAutoDelete($project, $zone, $instance, $autoDelete, $deviceName, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'autoDelete' => $autoDelete, 'deviceName' => $deviceName);
    $params = array_merge($params, $optParams);
    return $this->call('setDiskAutoDelete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.setLabels)
   *
   * @param Google_Service_Compute_InstancesSetLabelsRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setLabels($project, $zone, $instance, Google_Service_Compute_InstancesSetLabelsRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setLabels', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.setMachineResources)
   *
   * @param Google_Service_Compute_InstancesSetMachineResourcesRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setMachineResources($project, $zone, $instance, Google_Service_Compute_InstancesSetMachineResourcesRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setMachineResources', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.setMachineType)
   *
   * @param Google_Service_Compute_InstancesSetMachineTypeRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setMachineType($project, $zone, $instance, Google_Service_Compute_InstancesSetMachineTypeRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setMachineType', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.setMetadata)
   *
   * @param Google_Service_Compute_Metadata $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setMetadata($project, $zone, $instance, Google_Service_Compute_Metadata $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setMetadata', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.setMinCpuPlatform)
   *
   * @param Google_Service_Compute_InstancesSetMinCpuPlatformRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setMinCpuPlatform($project, $zone, $instance, Google_Service_Compute_InstancesSetMinCpuPlatformRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setMinCpuPlatform', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.setScheduling)
   *
   * @param Google_Service_Compute_Scheduling $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setScheduling($project, $zone, $instance, Google_Service_Compute_Scheduling $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setScheduling', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.setServiceAccount)
   *
   * @param Google_Service_Compute_InstancesSetServiceAccountRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setServiceAccount($project, $zone, $instance, Google_Service_Compute_InstancesSetServiceAccountRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setServiceAccount', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.setTags)
   *
   * @param Google_Service_Compute_Tags $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setTags($project, $zone, $instance, Google_Service_Compute_Tags $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setTags', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.simulateMaintenanceEvent)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Operation
   */
  public function simulateMaintenanceEvent($project, $zone, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('simulateMaintenanceEvent', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.start)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function start($project, $zone, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('start', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.startWithEncryptionKey)
   *
   * @param Google_Service_Compute_InstancesStartWithEncryptionKeyRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function startWithEncryptionKey($project, $zone, $instance, Google_Service_Compute_InstancesStartWithEncryptionKeyRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('startWithEncryptionKey', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.stop)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function stop($project, $zone, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('stop', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.updateAccessConfig)
   *
   * @param Google_Service_Compute_AccessConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function updateAccessConfig($project, $zone, $instance, $networkInterface, Google_Service_Compute_AccessConfig $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'networkInterface' => $networkInterface ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateAccessConfig', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instances.updateNetworkInterface)
   *
   * @param Google_Service_Compute_NetworkInterface $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function updateNetworkInterface($project, $zone, $instance, $networkInterface, Google_Service_Compute_NetworkInterface $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'networkInterface' => $networkInterface ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateNetworkInterface', array($params), "Google_Service_Compute_Operation");
  }
}
