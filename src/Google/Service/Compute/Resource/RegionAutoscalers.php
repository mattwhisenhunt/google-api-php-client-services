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
 * The "regionAutoscalers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $regionAutoscalers = $computeService->regionAutoscalers;
 *  </code>
 */
class Google_Service_Compute_Resource_RegionAutoscalers extends Google_Service_Resource
{
  /**
   *  (regionAutoscalers.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $region, $autoscaler, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'autoscaler' => $autoscaler);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionAutoscalers.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Autoscaler
   */
  public function get($project, $region, $autoscaler, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'autoscaler' => $autoscaler);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_Autoscaler");
  }
  /**
   *  (regionAutoscalers.insert)
   *
   * @param Google_Service_Compute_Autoscaler $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, $region, Google_Service_Compute_Autoscaler $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionAutoscalers.listRegionAutoscalers)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_RegionAutoscalerList
   */
  public function listRegionAutoscalers($project, $region, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_RegionAutoscalerList");
  }
  /**
   *  (regionAutoscalers.patch)
   *
   * @param Google_Service_Compute_Autoscaler $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function patch($project, $region, Google_Service_Compute_Autoscaler $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionAutoscalers.update)
   *
   * @param Google_Service_Compute_Autoscaler $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function update($project, $region, Google_Service_Compute_Autoscaler $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Compute_Operation");
  }
}
