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
 * The "uptimeCheckConfigs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $monitoringService = new Google_Service_Monitoring(...);
 *   $uptimeCheckConfigs = $monitoringService->uptimeCheckConfigs;
 *  </code>
 */
class Google_Service_Monitoring_Resource_ProjectsUptimeCheckConfigs extends Google_Service_Resource
{
  /**
   *  (uptimeCheckConfigs.create)
   *
   * @param Google_Service_Monitoring_UptimeCheckConfig $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Monitoring_UptimeCheckConfig
   */
  public function create($parent, Google_Service_Monitoring_UptimeCheckConfig $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Monitoring_UptimeCheckConfig");
  }
  /**
   *  (uptimeCheckConfigs.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Monitoring_MonitoringEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Monitoring_MonitoringEmpty");
  }
  /**
   *  (uptimeCheckConfigs.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Monitoring_UptimeCheckConfig
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Monitoring_UptimeCheckConfig");
  }
  /**
   *  (uptimeCheckConfigs.listProjectsUptimeCheckConfigs)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Monitoring_ListUptimeCheckConfigsResponse
   */
  public function listProjectsUptimeCheckConfigs($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Monitoring_ListUptimeCheckConfigsResponse");
  }
  /**
   *  (uptimeCheckConfigs.patch)
   *
   * @param Google_Service_Monitoring_UptimeCheckConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Monitoring_UptimeCheckConfig
   */
  public function patch($name, Google_Service_Monitoring_UptimeCheckConfig $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Monitoring_UptimeCheckConfig");
  }
}
