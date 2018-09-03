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
 * The "targetTcpProxies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetTcpProxies = $computeService->targetTcpProxies;
 *  </code>
 */
class Google_Service_Compute_Resource_TargetTcpProxies extends Google_Service_Resource
{
  /**
   *  (targetTcpProxies.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $targetTcpProxy, $optParams = array())
  {
    $params = array('project' => $project, 'targetTcpProxy' => $targetTcpProxy);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetTcpProxies.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_TargetTcpProxy
   */
  public function get($project, $targetTcpProxy, $optParams = array())
  {
    $params = array('project' => $project, 'targetTcpProxy' => $targetTcpProxy);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_TargetTcpProxy");
  }
  /**
   *  (targetTcpProxies.insert)
   *
   * @param Google_Service_Compute_TargetTcpProxy $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_TargetTcpProxy $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetTcpProxies.listTargetTcpProxies)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_TargetTcpProxyList
   */
  public function listTargetTcpProxies($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_TargetTcpProxyList");
  }
  /**
   *  (targetTcpProxies.setBackendService)
   *
   * @param Google_Service_Compute_TargetTcpProxiesSetBackendServiceRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setBackendService($project, $targetTcpProxy, Google_Service_Compute_TargetTcpProxiesSetBackendServiceRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'targetTcpProxy' => $targetTcpProxy ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setBackendService', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetTcpProxies.setProxyHeader)
   *
   * @param Google_Service_Compute_TargetTcpProxiesSetProxyHeaderRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setProxyHeader($project, $targetTcpProxy, Google_Service_Compute_TargetTcpProxiesSetProxyHeaderRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'targetTcpProxy' => $targetTcpProxy ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setProxyHeader', array($params), "Google_Service_Compute_Operation");
  }
}
