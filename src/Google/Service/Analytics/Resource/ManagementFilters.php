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
 * The "filters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $filters = $analyticsService->filters;
 *  </code>
 */
class Google_Service_Analytics_Resource_ManagementFilters extends Google_Service_Resource
{
  /**
   *  (filters.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_Filter
   */
  public function delete($accountId, $filterId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'filterId' => $filterId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Analytics_Filter");
  }
  /**
   *  (filters.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_Filter
   */
  public function get($accountId, $filterId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'filterId' => $filterId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Analytics_Filter");
  }
  /**
   *  (filters.insert)
   *
   * @param Google_Service_Analytics_Filter $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_Filter
   */
  public function insert($accountId, Google_Service_Analytics_Filter $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Analytics_Filter");
  }
  /**
   *  (filters.listManagementFilters)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Analytics_Filters
   */
  public function listManagementFilters($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Analytics_Filters");
  }
  /**
   *  (filters.patch)
   *
   * @param Google_Service_Analytics_Filter $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_Filter
   */
  public function patch($accountId, $filterId, Google_Service_Analytics_Filter $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'filterId' => $filterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Analytics_Filter");
  }
  /**
   *  (filters.update)
   *
   * @param Google_Service_Analytics_Filter $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_Filter
   */
  public function update($accountId, $filterId, Google_Service_Analytics_Filter $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'filterId' => $filterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Analytics_Filter");
  }
}
