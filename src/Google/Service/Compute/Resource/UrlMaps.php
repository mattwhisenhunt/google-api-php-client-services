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
 * The "urlMaps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $urlMaps = $computeService->urlMaps;
 *  </code>
 */
class Google_Service_Compute_Resource_UrlMaps extends Google_Service_Resource
{
  /**
   *  (urlMaps.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $urlMap, $optParams = array())
  {
    $params = array('project' => $project, 'urlMap' => $urlMap);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (urlMaps.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_UrlMap
   */
  public function get($project, $urlMap, $optParams = array())
  {
    $params = array('project' => $project, 'urlMap' => $urlMap);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_UrlMap");
  }
  /**
   *  (urlMaps.insert)
   *
   * @param Google_Service_Compute_UrlMap $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_UrlMap $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (urlMaps.invalidateCache)
   *
   * @param Google_Service_Compute_CacheInvalidationRule $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function invalidateCache($project, $urlMap, Google_Service_Compute_CacheInvalidationRule $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'urlMap' => $urlMap ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('invalidateCache', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (urlMaps.listUrlMaps)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_UrlMapList
   */
  public function listUrlMaps($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_UrlMapList");
  }
  /**
   *  (urlMaps.patch)
   *
   * @param Google_Service_Compute_UrlMap $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function patch($project, $urlMap, Google_Service_Compute_UrlMap $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'urlMap' => $urlMap ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (urlMaps.update)
   *
   * @param Google_Service_Compute_UrlMap $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function update($project, $urlMap, Google_Service_Compute_UrlMap $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'urlMap' => $urlMap ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (urlMaps.validate)
   *
   * @param Google_Service_Compute_UrlMapsValidateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_UrlMapsValidateResponse
   */
  public function validate($project, $urlMap, Google_Service_Compute_UrlMapsValidateRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'urlMap' => $urlMap ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('validate', array($params), "Google_Service_Compute_UrlMapsValidateResponse");
  }
}
