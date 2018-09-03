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
 * The "targetHttpProxies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetHttpProxies = $computeService->targetHttpProxies;
 *  </code>
 */
class Google_Service_Compute_Resource_TargetHttpProxies extends Google_Service_Resource
{
  /**
   *  (targetHttpProxies.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $targetHttpProxy, $optParams = array())
  {
    $params = array('project' => $project, 'targetHttpProxy' => $targetHttpProxy);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetHttpProxies.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_TargetHttpProxy
   */
  public function get($project, $targetHttpProxy, $optParams = array())
  {
    $params = array('project' => $project, 'targetHttpProxy' => $targetHttpProxy);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_TargetHttpProxy");
  }
  /**
   *  (targetHttpProxies.insert)
   *
   * @param Google_Service_Compute_TargetHttpProxy $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_TargetHttpProxy $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (targetHttpProxies.listTargetHttpProxies)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_TargetHttpProxyList
   */
  public function listTargetHttpProxies($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_TargetHttpProxyList");
  }
  /**
   *  (targetHttpProxies.setUrlMap)
   *
   * @param Google_Service_Compute_UrlMapReference $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setUrlMap($project, $targetHttpProxy, Google_Service_Compute_UrlMapReference $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'targetHttpProxy' => $targetHttpProxy ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setUrlMap', array($params), "Google_Service_Compute_Operation");
  }
}
