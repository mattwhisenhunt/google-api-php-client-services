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
 * The "v1" collection of methods.
 * Typical usage is:
 *  <code>
 *   $servicebrokerService = new Google_Service_ServiceBroker(...);
 *   $v1 = $servicebrokerService->v1;
 *  </code>
 */
class Google_Service_ServiceBroker_Resource_V1 extends Google_Service_Resource
{
  /**
   *  (v1.getIamPolicy)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceBroker_GoogleIamV1Policy
   */
  public function getIamPolicy($resource, $optParams = array())
  {
    $params = array('resource' => $resource);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_ServiceBroker_GoogleIamV1Policy");
  }
  /**
   *  (v1.setIamPolicy)
   *
   * @param Google_Service_ServiceBroker_GoogleIamV1SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceBroker_GoogleIamV1Policy
   */
  public function setIamPolicy($resource, Google_Service_ServiceBroker_GoogleIamV1SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_ServiceBroker_GoogleIamV1Policy");
  }
  /**
   *  (v1.testIamPermissions)
   *
   * @param Google_Service_ServiceBroker_GoogleIamV1TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceBroker_GoogleIamV1TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_ServiceBroker_GoogleIamV1TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_ServiceBroker_GoogleIamV1TestIamPermissionsResponse");
  }
}
