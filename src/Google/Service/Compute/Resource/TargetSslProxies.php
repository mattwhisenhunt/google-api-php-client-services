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
 * The "targetSslProxies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetSslProxies = $computeService->targetSslProxies;
 *  </code>
 */
class Google_Service_Compute_Resource_TargetSslProxies extends Google_Service_Resource
{
  /**
   *  (targetSslProxies.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $targetSslProxy, $optParams = array())
  {
    $params = array('project' => $project, 'targetSslProxy' => $targetSslProxy);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetSslProxies.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_TargetSslProxy
   */
  public function get($project, $targetSslProxy, $optParams = array())
  {
    $params = array('project' => $project, 'targetSslProxy' => $targetSslProxy);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_TargetSslProxy");
  }
  /**
   *  (targetSslProxies.insert)
   *
   * @param Google_Service_Compute_TargetSslProxy $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_TargetSslProxy $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetSslProxies.listTargetSslProxies)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_TargetSslProxyList
   */
  public function listTargetSslProxies($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_TargetSslProxyList");
  }
  /**
   *  (targetSslProxies.setBackendService)
   *
   * @param Google_Service_Compute_TargetSslProxiesSetBackendServiceRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setBackendService($project, $targetSslProxy, Google_Service_Compute_TargetSslProxiesSetBackendServiceRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'targetSslProxy' => $targetSslProxy ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setBackendService', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetSslProxies.setProxyHeader)
   *
   * @param Google_Service_Compute_TargetSslProxiesSetProxyHeaderRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setProxyHeader($project, $targetSslProxy, Google_Service_Compute_TargetSslProxiesSetProxyHeaderRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'targetSslProxy' => $targetSslProxy ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setProxyHeader', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetSslProxies.setSslCertificates)
   *
   * @param Google_Service_Compute_TargetSslProxiesSetSslCertificatesRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setSslCertificates($project, $targetSslProxy, Google_Service_Compute_TargetSslProxiesSetSslCertificatesRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'targetSslProxy' => $targetSslProxy ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setSslCertificates', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetSslProxies.setSslPolicy)
   *
   * @param Google_Service_Compute_SslPolicyReference $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setSslPolicy($project, $targetSslProxy, Google_Service_Compute_SslPolicyReference $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'targetSslProxy' => $targetSslProxy ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setSslPolicy', array($params), "Google_Service_Compute_Operation");
  }
}
