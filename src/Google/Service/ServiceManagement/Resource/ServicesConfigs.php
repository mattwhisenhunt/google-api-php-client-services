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
 * The "configs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $servicemanagementService = new Google_Service_ServiceManagement(...);
 *   $configs = $servicemanagementService->configs;
 *  </code>
 */
class Google_Service_ServiceManagement_Resource_ServicesConfigs extends Google_Service_Resource
{
  /**
   *  (configs.create)
   *
   * @param Google_Service_ServiceManagement_Service $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_Service
   */
  public function create($serviceName, Google_Service_ServiceManagement_Service $postBody, $optParams = array())
  {
    $params = array('serviceName' => $serviceName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_ServiceManagement_Service");
  }
  /**
   *  (configs.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ServiceManagement_Service
   */
  public function get($serviceName, $configId, $optParams = array())
  {
    $params = array('serviceName' => $serviceName, 'configId' => $configId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ServiceManagement_Service");
  }
  /**
   *  (configs.listServicesConfigs)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ServiceManagement_ListServiceConfigsResponse
   */
  public function listServicesConfigs($serviceName, $optParams = array())
  {
    $params = array('serviceName' => $serviceName);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ServiceManagement_ListServiceConfigsResponse");
  }
  /**
   *  (configs.submit)
   *
   * @param Google_Service_ServiceManagement_SubmitConfigSourceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_Operation
   */
  public function submit($serviceName, Google_Service_ServiceManagement_SubmitConfigSourceRequest $postBody, $optParams = array())
  {
    $params = array('serviceName' => $serviceName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('submit', array($params), "Google_Service_ServiceManagement_Operation");
  }
}
