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
 * The "targetVpnGateways" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetVpnGateways = $computeService->targetVpnGateways;
 *  </code>
 */
class Google_Service_Compute_Resource_TargetVpnGateways extends Google_Service_Resource
{
  /**
   *  (targetVpnGateways.aggregatedList)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_TargetVpnGatewayAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), "Google_Service_Compute_TargetVpnGatewayAggregatedList");
  }
  /**
   *  (targetVpnGateways.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $region, $targetVpnGateway, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetVpnGateway' => $targetVpnGateway);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetVpnGateways.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_TargetVpnGateway
   */
  public function get($project, $region, $targetVpnGateway, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetVpnGateway' => $targetVpnGateway);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_TargetVpnGateway");
  }
  /**
   *  (targetVpnGateways.insert)
   *
   * @param Google_Service_Compute_TargetVpnGateway $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, $region, Google_Service_Compute_TargetVpnGateway $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetVpnGateways.listTargetVpnGateways)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_TargetVpnGatewayList
   */
  public function listTargetVpnGateways($project, $region, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_TargetVpnGatewayList");
  }
}
