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
 * The "customMetrics" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $customMetrics = $analyticsService->customMetrics;
 *  </code>
 */
class Google_Service_Analytics_Resource_ManagementCustomMetrics extends Google_Service_Resource
{
  /**
   *  (customMetrics.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_CustomMetric
   */
  public function get($accountId, $webPropertyId, $customMetricId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customMetricId' => $customMetricId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Analytics_CustomMetric");
  }
  /**
   *  (customMetrics.insert)
   *
   * @param Google_Service_Analytics_CustomMetric $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_CustomMetric
   */
  public function insert($accountId, $webPropertyId, Google_Service_Analytics_CustomMetric $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Analytics_CustomMetric");
  }
  /**
   *  (customMetrics.listManagementCustomMetrics)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Analytics_CustomMetrics
   */
  public function listManagementCustomMetrics($accountId, $webPropertyId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Analytics_CustomMetrics");
  }
  /**
   *  (customMetrics.patch)
   *
   * @param Google_Service_Analytics_CustomMetric $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Analytics_CustomMetric
   */
  public function patch($accountId, $webPropertyId, $customMetricId, Google_Service_Analytics_CustomMetric $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customMetricId' => $customMetricId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Analytics_CustomMetric");
  }
  /**
   *  (customMetrics.update)
   *
   * @param Google_Service_Analytics_CustomMetric $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Analytics_CustomMetric
   */
  public function update($accountId, $webPropertyId, $customMetricId, Google_Service_Analytics_CustomMetric $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customMetricId' => $customMetricId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Analytics_CustomMetric");
  }
}
