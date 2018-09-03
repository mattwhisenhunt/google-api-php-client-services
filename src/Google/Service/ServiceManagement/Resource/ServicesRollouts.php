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
 * The "rollouts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $servicemanagementService = new Google_Service_ServiceManagement(...);
 *   $rollouts = $servicemanagementService->rollouts;
 *  </code>
 */
class Google_Service_ServiceManagement_Resource_ServicesRollouts extends Google_Service_Resource
{
  /**
   *  (rollouts.create)
   *
   * @param Google_Service_ServiceManagement_Rollout $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_Operation
   */
  public function create($serviceName, Google_Service_ServiceManagement_Rollout $postBody, $optParams = array())
  {
    $params = array('serviceName' => $serviceName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_ServiceManagement_Operation");
  }
  /**
   *  (rollouts.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_Rollout
   */
  public function get($serviceName, $rolloutId, $optParams = array())
  {
    $params = array('serviceName' => $serviceName, 'rolloutId' => $rolloutId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ServiceManagement_Rollout");
  }
  /**
   *  (rollouts.listServicesRollouts)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ServiceManagement_ListServiceRolloutsResponse
   */
  public function listServicesRollouts($serviceName, $optParams = array())
  {
    $params = array('serviceName' => $serviceName);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ServiceManagement_ListServiceRolloutsResponse");
  }
}
