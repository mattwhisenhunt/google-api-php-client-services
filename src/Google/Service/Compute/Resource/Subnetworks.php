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
 * The "subnetworks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $subnetworks = $computeService->subnetworks;
 *  </code>
 */
class Google_Service_Compute_Resource_Subnetworks extends Google_Service_Resource
{
  /**
   *  (subnetworks.aggregatedList)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_SubnetworkAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), "Google_Service_Compute_SubnetworkAggregatedList");
  }
  /**
   *  (subnetworks.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $region, $subnetwork, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'subnetwork' => $subnetwork);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (subnetworks.expandIpCidrRange)
   *
   * @param Google_Service_Compute_SubnetworksExpandIpCidrRangeRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function expandIpCidrRange($project, $region, $subnetwork, Google_Service_Compute_SubnetworksExpandIpCidrRangeRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'subnetwork' => $subnetwork ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('expandIpCidrRange', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (subnetworks.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Subnetwork
   */
  public function get($project, $region, $subnetwork, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'subnetwork' => $subnetwork);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_Subnetwork");
  }
  /**
   *  (subnetworks.insert)
   *
   * @param Google_Service_Compute_Subnetwork $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, $region, Google_Service_Compute_Subnetwork $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (subnetworks.listSubnetworks)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_SubnetworkList
   */
  public function listSubnetworks($project, $region, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_SubnetworkList");
  }
  /**
   *  (subnetworks.listUsable)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_UsableSubnetworksAggregatedList
   */
  public function listUsable($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('listUsable', array($params), "Google_Service_Compute_UsableSubnetworksAggregatedList");
  }
  /**
   *  (subnetworks.patch)
   *
   * @param Google_Service_Compute_Subnetwork $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function patch($project, $region, $subnetwork, Google_Service_Compute_Subnetwork $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'subnetwork' => $subnetwork ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (subnetworks.setPrivateIpGoogleAccess)
   *
   * @param Google_Service_Compute_SubnetworksSetPrivateIpGoogleAccessRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setPrivateIpGoogleAccess($project, $region, $subnetwork, Google_Service_Compute_SubnetworksSetPrivateIpGoogleAccessRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'subnetwork' => $subnetwork ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setPrivateIpGoogleAccess', array($params), "Google_Service_Compute_Operation");
  }
}
