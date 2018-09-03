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
 *   $servicecontrolService = new Google_Service_ServiceControl(...);
 *   $services = $servicecontrolService->services;
 *  </code>
 */
class Google_Service_ServiceControl_Resource_Services extends Google_Service_Resource
{
  /**
   *  (services.allocateQuota)
   *
   * @param Google_Service_ServiceControl_AllocateQuotaRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceControl_AllocateQuotaResponse
   */
  public function allocateQuota($serviceName, Google_Service_ServiceControl_AllocateQuotaRequest $postBody, $optParams = array())
  {
    $params = array('serviceName' => $serviceName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('allocateQuota', array($params), "Google_Service_ServiceControl_AllocateQuotaResponse");
  }
  /**
   *  (services.check)
   *
   * @param Google_Service_ServiceControl_CheckRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceControl_CheckResponse
   */
  public function check($serviceName, Google_Service_ServiceControl_CheckRequest $postBody, $optParams = array())
  {
    $params = array('serviceName' => $serviceName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('check', array($params), "Google_Service_ServiceControl_CheckResponse");
  }
  /**
   *  (services.endReconciliation)
   *
   * @param Google_Service_ServiceControl_EndReconciliationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceControl_EndReconciliationResponse
   */
  public function endReconciliation($serviceName, Google_Service_ServiceControl_EndReconciliationRequest $postBody, $optParams = array())
  {
    $params = array('serviceName' => $serviceName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('endReconciliation', array($params), "Google_Service_ServiceControl_EndReconciliationResponse");
  }
  /**
   *  (services.releaseQuota)
   *
   * @param Google_Service_ServiceControl_ReleaseQuotaRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceControl_ReleaseQuotaResponse
   */
  public function releaseQuota($serviceName, Google_Service_ServiceControl_ReleaseQuotaRequest $postBody, $optParams = array())
  {
    $params = array('serviceName' => $serviceName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('releaseQuota', array($params), "Google_Service_ServiceControl_ReleaseQuotaResponse");
  }
  /**
   *  (services.report)
   *
   * @param Google_Service_ServiceControl_ReportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceControl_ReportResponse
   */
  public function report($serviceName, Google_Service_ServiceControl_ReportRequest $postBody, $optParams = array())
  {
    $params = array('serviceName' => $serviceName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('report', array($params), "Google_Service_ServiceControl_ReportResponse");
  }
  /**
   *  (services.startReconciliation)
   *
   * @param Google_Service_ServiceControl_StartReconciliationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceControl_StartReconciliationResponse
   */
  public function startReconciliation($serviceName, Google_Service_ServiceControl_StartReconciliationRequest $postBody, $optParams = array())
  {
    $params = array('serviceName' => $serviceName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('startReconciliation', array($params), "Google_Service_ServiceControl_StartReconciliationResponse");
  }
}
