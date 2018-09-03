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
 * The "alertPolicies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $monitoringService = new Google_Service_Monitoring(...);
 *   $alertPolicies = $monitoringService->alertPolicies;
 *  </code>
 */
class Google_Service_Monitoring_Resource_ProjectsAlertPolicies extends Google_Service_Resource
{
  /**
   *  (alertPolicies.create)
   *
   * @param Google_Service_Monitoring_AlertPolicy $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Monitoring_AlertPolicy
   */
  public function create($name, Google_Service_Monitoring_AlertPolicy $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Monitoring_AlertPolicy");
  }
  /**
   *  (alertPolicies.delete)
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
   *  (alertPolicies.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Monitoring_AlertPolicy
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Monitoring_AlertPolicy");
  }
  /**
   *  (alertPolicies.listProjectsAlertPolicies)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Monitoring_ListAlertPoliciesResponse
   */
  public function listProjectsAlertPolicies($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Monitoring_ListAlertPoliciesResponse");
  }
  /**
   *  (alertPolicies.patch)
   *
   * @param Google_Service_Monitoring_AlertPolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Monitoring_AlertPolicy
   */
  public function patch($name, Google_Service_Monitoring_AlertPolicy $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Monitoring_AlertPolicy");
  }
}
