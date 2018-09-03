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
 * The "metrics" collection of methods.
 * Typical usage is:
 *  <code>
 *   $loggingService = new Google_Service_Logging(...);
 *   $metrics = $loggingService->metrics;
 *  </code>
 */
class Google_Service_Logging_Resource_ProjectsMetrics extends Google_Service_Resource
{
  /**
   *  (metrics.create)
   *
   * @param Google_Service_Logging_LogMetric $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Logging_LogMetric
   */
  public function create($parent, Google_Service_Logging_LogMetric $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Logging_LogMetric");
  }
  /**
   *  (metrics.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Logging_LoggingEmpty
   */
  public function delete($metricName, $optParams = array())
  {
    $params = array('metricName' => $metricName);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Logging_LoggingEmpty");
  }
  /**
   *  (metrics.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Logging_LogMetric
   */
  public function get($metricName, $optParams = array())
  {
    $params = array('metricName' => $metricName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Logging_LogMetric");
  }
  /**
   *  (metrics.listProjectsMetrics)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Logging_ListLogMetricsResponse
   */
  public function listProjectsMetrics($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Logging_ListLogMetricsResponse");
  }
  /**
   *  (metrics.update)
   *
   * @param Google_Service_Logging_LogMetric $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Logging_LogMetric
   */
  public function update($metricName, Google_Service_Logging_LogMetric $postBody, $optParams = array())
  {
    $params = array('metricName' => $metricName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Logging_LogMetric");
  }
}
