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
 * The "scanConfigs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $websecurityscannerService = new Google_Service_WebSecurityScanner(...);
 *   $scanConfigs = $websecurityscannerService->scanConfigs;
 *  </code>
 */
class Google_Service_WebSecurityScanner_Resource_ProjectsScanConfigs extends Google_Service_Resource
{
  /**
   *  (scanConfigs.create)
   *
   * @param Google_Service_WebSecurityScanner_ScanConfig $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_WebSecurityScanner_ScanConfig
   */
  public function create($parent, Google_Service_WebSecurityScanner_ScanConfig $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_WebSecurityScanner_ScanConfig");
  }
  /**
   *  (scanConfigs.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_WebSecurityScanner_WebsecurityscannerEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_WebSecurityScanner_WebsecurityscannerEmpty");
  }
  /**
   *  (scanConfigs.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_WebSecurityScanner_ScanConfig
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_WebSecurityScanner_ScanConfig");
  }
  /**
   *  (scanConfigs.listProjectsScanConfigs)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_WebSecurityScanner_ListScanConfigsResponse
   */
  public function listProjectsScanConfigs($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_WebSecurityScanner_ListScanConfigsResponse");
  }
  /**
   *  (scanConfigs.patch)
   *
   * @param Google_Service_WebSecurityScanner_ScanConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_WebSecurityScanner_ScanConfig
   */
  public function patch($name, Google_Service_WebSecurityScanner_ScanConfig $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_WebSecurityScanner_ScanConfig");
  }
  /**
   *  (scanConfigs.start)
   *
   * @param Google_Service_WebSecurityScanner_StartScanRunRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_WebSecurityScanner_ScanRun
   */
  public function start($name, Google_Service_WebSecurityScanner_StartScanRunRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('start', array($params), "Google_Service_WebSecurityScanner_ScanRun");
  }
}
