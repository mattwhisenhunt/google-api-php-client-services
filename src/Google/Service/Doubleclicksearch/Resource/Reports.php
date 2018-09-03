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
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $doubleclicksearchService = new Google_Service_Doubleclicksearch(...);
 *   $reports = $doubleclicksearchService->reports;
 *  </code>
 */
class Google_Service_Doubleclicksearch_Resource_Reports extends Google_Service_Resource
{
  /**
   *  (reports.generate)
   *
   * @param Google_Service_Doubleclicksearch_ReportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Doubleclicksearch_Report
   */
  public function generate(Google_Service_Doubleclicksearch_ReportRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('generate', array($params), "Google_Service_Doubleclicksearch_Report");
  }
  /**
   *  (reports.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Doubleclicksearch_Report
   */
  public function get($reportId, $optParams = array())
  {
    $params = array('reportId' => $reportId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Doubleclicksearch_Report");
  }
  /**
   *  (reports.getFile)
   *
   * @param array $optParams Optional parameters.

   */
  public function getFile($reportId, $reportFragment, $optParams = array())
  {
    $params = array('reportId' => $reportId, 'reportFragment' => $reportFragment);
    $params = array_merge($params, $optParams);
    return $this->call('getFile', array($params));
  }
  /**
   *  (reports.request)
   *
   * @param Google_Service_Doubleclicksearch_ReportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Doubleclicksearch_Report
   */
  public function request(Google_Service_Doubleclicksearch_ReportRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('request', array($params), "Google_Service_Doubleclicksearch_Report");
  }
}
