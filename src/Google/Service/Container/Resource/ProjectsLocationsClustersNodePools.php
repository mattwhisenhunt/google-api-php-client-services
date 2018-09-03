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
 * The "nodePools" collection of methods.
 * Typical usage is:
 *  <code>
 *   $containerService = new Google_Service_Container(...);
 *   $nodePools = $containerService->nodePools;
 *  </code>
 */
class Google_Service_Container_Resource_ProjectsLocationsClustersNodePools extends Google_Service_Resource
{
  /**
   *  (nodePools.create)
   *
   * @param Google_Service_Container_CreateNodePoolRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function create($parent, Google_Service_Container_CreateNodePoolRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (nodePools.delete)
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
   *  (nodePools.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Container_NodePool
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Container_NodePool");
  }
  /**
   *  (nodePools.listProjectsLocationsClustersNodePools)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Container_ListNodePoolsResponse
   */
  public function listProjectsLocationsClustersNodePools($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Container_ListNodePoolsResponse");
  }
  /**
   *  (nodePools.rollback)
   *
   * @param Google_Service_Container_RollbackNodePoolUpgradeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function rollback($name, Google_Service_Container_RollbackNodePoolUpgradeRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('rollback', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (nodePools.setAutoscaling)
   *
   * @param Google_Service_Container_SetNodePoolAutoscalingRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function setAutoscaling($name, Google_Service_Container_SetNodePoolAutoscalingRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setAutoscaling', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (nodePools.setManagement)
   *
   * @param Google_Service_Container_SetNodePoolManagementRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function setManagement($name, Google_Service_Container_SetNodePoolManagementRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setManagement', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (nodePools.setSize)
   *
   * @param Google_Service_Container_SetNodePoolSizeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function setSize($name, Google_Service_Container_SetNodePoolSizeRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setSize', array($params), "Google_Service_Container_Operation");
  }
  /**
   *  (nodePools.update)
   *
   * @param Google_Service_Container_UpdateNodePoolRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_Operation
   */
  public function update($name, Google_Service_Container_UpdateNodePoolRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Container_Operation");
  }
}
