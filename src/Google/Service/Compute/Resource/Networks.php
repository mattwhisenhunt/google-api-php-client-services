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
 * The "networks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $networks = $computeService->networks;
 *  </code>
 */
class Google_Service_Compute_Resource_Networks extends Google_Service_Resource
{
  /**
   *  (networks.addPeering)
   *
   * @param Google_Service_Compute_NetworksAddPeeringRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function addPeering($project, $network, Google_Service_Compute_NetworksAddPeeringRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'network' => $network ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addPeering', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (networks.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $network, $optParams = array())
  {
    $params = array('project' => $project, 'network' => $network);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (networks.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Network
   */
  public function get($project, $network, $optParams = array())
  {
    $params = array('project' => $project, 'network' => $network);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_Network");
  }
  /**
   *  (networks.insert)
   *
   * @param Google_Service_Compute_Network $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_Network $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (networks.listNetworks)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_NetworkList
   */
  public function listNetworks($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_NetworkList");
  }
  /**
   *  (networks.patch)
   *
   * @param Google_Service_Compute_Network $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function patch($project, $network, Google_Service_Compute_Network $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'network' => $network ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (networks.removePeering)
   *
   * @param Google_Service_Compute_NetworksRemovePeeringRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function removePeering($project, $network, Google_Service_Compute_NetworksRemovePeeringRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'network' => $network ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('removePeering', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (networks.switchToCustomMode)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function switchToCustomMode($project, $network, $optParams = array())
  {
    $params = array('project' => $project, 'network' => $network);
    $params = array_merge($params, $optParams);
    return $this->call('switchToCustomMode', array($params), "Google_Service_Compute_Operation");
  }
}
