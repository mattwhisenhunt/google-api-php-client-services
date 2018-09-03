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
 * The "services" collection of methods.
 * Typical usage is:
 *  <code>
 *   $servicemanagementService = new Google_Service_ServiceManagement(...);
 *   $services = $servicemanagementService->services;
 *  </code>
 */
class Google_Service_ServiceManagement_Resource_Services extends Google_Service_Resource
{
  /**
   *  (services.create)
   *
   * @param Google_Service_ServiceManagement_ManagedService $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_Operation
   */
  public function create(Google_Service_ServiceManagement_ManagedService $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_ServiceManagement_Operation");
  }
  /**
   *  (services.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_Operation
   */
  public function delete($serviceName, $optParams = array())
  {
    $params = array('serviceName' => $serviceName);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_ServiceManagement_Operation");
  }
  /**
   *  (services.disable)
   *
   * @param Google_Service_ServiceManagement_DisableServiceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_Operation
   */
  public function disable($serviceName, Google_Service_ServiceManagement_DisableServiceRequest $postBody, $optParams = array())
  {
    $params = array('serviceName' => $serviceName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('disable', array($params), "Google_Service_ServiceManagement_Operation");
  }
  /**
   *  (services.enable)
   *
   * @param Google_Service_ServiceManagement_EnableServiceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_Operation
   */
  public function enable($serviceName, Google_Service_ServiceManagement_EnableServiceRequest $postBody, $optParams = array())
  {
    $params = array('serviceName' => $serviceName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('enable', array($params), "Google_Service_ServiceManagement_Operation");
  }
  /**
   *  (services.generateConfigReport)
   *
   * @param Google_Service_ServiceManagement_GenerateConfigReportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_GenerateConfigReportResponse
   */
  public function generateConfigReport(Google_Service_ServiceManagement_GenerateConfigReportRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('generateConfigReport', array($params), "Google_Service_ServiceManagement_GenerateConfigReportResponse");
  }
  /**
   *  (services.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_ManagedService
   */
  public function get($serviceName, $optParams = array())
  {
    $params = array('serviceName' => $serviceName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ServiceManagement_ManagedService");
  }
  /**
   *  (services.getConfig)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ServiceManagement_Service
   */
  public function getConfig($serviceName, $optParams = array())
  {
    $params = array('serviceName' => $serviceName);
    $params = array_merge($params, $optParams);
    return $this->call('getConfig', array($params), "Google_Service_ServiceManagement_Service");
  }
  /**
   *  (services.getIamPolicy)
   *
   * @param Google_Service_ServiceManagement_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_Policy
   */
  public function getIamPolicy($resource, Google_Service_ServiceManagement_GetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_ServiceManagement_Policy");
  }
  /**
   *  (services.listServices)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ServiceManagement_ListServicesResponse
   */
  public function listServices($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ServiceManagement_ListServicesResponse");
  }
  /**
   *  (services.setIamPolicy)
   *
   * @param Google_Service_ServiceManagement_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_Policy
   */
  public function setIamPolicy($resource, Google_Service_ServiceManagement_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_ServiceManagement_Policy");
  }
  /**
   *  (services.testIamPermissions)
   *
   * @param Google_Service_ServiceManagement_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_ServiceManagement_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_ServiceManagement_TestIamPermissionsResponse");
  }
  /**
   *  (services.undelete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_Operation
   */
  public function undelete($serviceName, $optParams = array())
  {
    $params = array('serviceName' => $serviceName);
    $params = array_merge($params, $optParams);
    return $this->call('undelete', array($params), "Google_Service_ServiceManagement_Operation");
  }
}
