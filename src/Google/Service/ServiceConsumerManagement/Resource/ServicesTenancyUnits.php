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
 * The "tenancyUnits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $serviceconsumermanagementService = new Google_Service_ServiceConsumerManagement(...);
 *   $tenancyUnits = $serviceconsumermanagementService->tenancyUnits;
 *  </code>
 */
class Google_Service_ServiceConsumerManagement_Resource_ServicesTenancyUnits extends Google_Service_Resource
{
  /**
   *  (tenancyUnits.addProject)
   *
   * @param Google_Service_ServiceConsumerManagement_AddTenantProjectRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceConsumerManagement_Operation
   */
  public function addProject($parent, Google_Service_ServiceConsumerManagement_AddTenantProjectRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addProject', array($params), "Google_Service_ServiceConsumerManagement_Operation");
  }
  /**
   *  (tenancyUnits.create)
   *
   * @param Google_Service_ServiceConsumerManagement_CreateTenancyUnitRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceConsumerManagement_TenancyUnit
   */
  public function create($parent, Google_Service_ServiceConsumerManagement_CreateTenancyUnitRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_ServiceConsumerManagement_TenancyUnit");
  }
  /**
   *  (tenancyUnits.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceConsumerManagement_Operation
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_ServiceConsumerManagement_Operation");
  }
  /**
   *  (tenancyUnits.listServicesTenancyUnits)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ServiceConsumerManagement_ListTenancyUnitsResponse
   */
  public function listServicesTenancyUnits($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ServiceConsumerManagement_ListTenancyUnitsResponse");
  }
  /**
   *  (tenancyUnits.removeProject)
   *
   * @param Google_Service_ServiceConsumerManagement_RemoveTenantProjectRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceConsumerManagement_Operation
   */
  public function removeProject($name, Google_Service_ServiceConsumerManagement_RemoveTenantProjectRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('removeProject', array($params), "Google_Service_ServiceConsumerManagement_Operation");
  }
}
