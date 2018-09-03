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
 * The "targetHttpsProxies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetHttpsProxies = $computeService->targetHttpsProxies;
 *  </code>
 */
class Google_Service_Compute_Resource_TargetHttpsProxies extends Google_Service_Resource
{
  /**
   *  (targetHttpsProxies.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $targetHttpsProxy, $optParams = array())
  {
    $params = array('project' => $project, 'targetHttpsProxy' => $targetHttpsProxy);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetHttpsProxies.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_TargetHttpsProxy
   */
  public function get($project, $targetHttpsProxy, $optParams = array())
  {
    $params = array('project' => $project, 'targetHttpsProxy' => $targetHttpsProxy);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_TargetHttpsProxy");
  }
  /**
   *  (targetHttpsProxies.insert)
   *
   * @param Google_Service_Compute_TargetHttpsProxy $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_TargetHttpsProxy $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetHttpsProxies.listTargetHttpsProxies)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_TargetHttpsProxyList
   */
  public function listTargetHttpsProxies($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_TargetHttpsProxyList");
  }
  /**
   *  (targetHttpsProxies.setQuicOverride)
   *
   * @param Google_Service_Compute_TargetHttpsProxiesSetQuicOverrideRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setQuicOverride($project, $targetHttpsProxy, Google_Service_Compute_TargetHttpsProxiesSetQuicOverrideRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'targetHttpsProxy' => $targetHttpsProxy ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setQuicOverride', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetHttpsProxies.setSslCertificates)
   *
   * @param Google_Service_Compute_TargetHttpsProxiesSetSslCertificatesRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setSslCertificates($project, $targetHttpsProxy, Google_Service_Compute_TargetHttpsProxiesSetSslCertificatesRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'targetHttpsProxy' => $targetHttpsProxy ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setSslCertificates', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetHttpsProxies.setSslPolicy)
   *
   * @param Google_Service_Compute_SslPolicyReference $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setSslPolicy($project, $targetHttpsProxy, Google_Service_Compute_SslPolicyReference $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'targetHttpsProxy' => $targetHttpsProxy ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setSslPolicy', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetHttpsProxies.setUrlMap)
   *
   * @param Google_Service_Compute_UrlMapReference $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setUrlMap($project, $targetHttpsProxy, Google_Service_Compute_UrlMapReference $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'targetHttpsProxy' => $targetHttpsProxy ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setUrlMap', array($params), "Google_Service_Compute_Operation");
  }
}
