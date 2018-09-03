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
 * The "routers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $routers = $computeService->routers;
 *  </code>
 */
class Google_Service_Compute_Resource_Routers extends Google_Service_Resource
{
  /**
   *  (routers.aggregatedList)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_RouterAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), "Google_Service_Compute_RouterAggregatedList");
  }
  /**
   *  (routers.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $region, $router, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'router' => $router);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (routers.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Router
   */
  public function get($project, $region, $router, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'router' => $router);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_Router");
  }
  /**
   *  (routers.getRouterStatus)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_RouterStatusResponse
   */
  public function getRouterStatus($project, $region, $router, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'router' => $router);
    $params = array_merge($params, $optParams);
    return $this->call('getRouterStatus', array($params), "Google_Service_Compute_RouterStatusResponse");
  }
  /**
   *  (routers.insert)
   *
   * @param Google_Service_Compute_Router $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, $region, Google_Service_Compute_Router $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (routers.listRouters)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_RouterList
   */
  public function listRouters($project, $region, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_RouterList");
  }
  /**
   *  (routers.patch)
   *
   * @param Google_Service_Compute_Router $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function patch($project, $region, $router, Google_Service_Compute_Router $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'router' => $router ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (routers.preview)
   *
   * @param Google_Service_Compute_Router $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_RoutersPreviewResponse
   */
  public function preview($project, $region, $router, Google_Service_Compute_Router $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'router' => $router ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('preview', array($params), "Google_Service_Compute_RoutersPreviewResponse");
  }
  /**
   *  (routers.update)
   *
   * @param Google_Service_Compute_Router $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function update($project, $region, $router, Google_Service_Compute_Router $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'router' => $router ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Compute_Operation");
  }
}
