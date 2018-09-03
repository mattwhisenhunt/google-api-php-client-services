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
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudbillingService = new Google_Service_Cloudbilling(...);
 *   $projects = $cloudbillingService->projects;
 *  </code>
 */
class Google_Service_Cloudbilling_Resource_Projects extends Google_Service_Resource
{
  /**
   *  (projects.getBillingInfo)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Cloudbilling_ProjectBillingInfo
   */
  public function getBillingInfo($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getBillingInfo', array($params), "Google_Service_Cloudbilling_ProjectBillingInfo");
  }
  /**
   *  (projects.updateBillingInfo)
   *
   * @param Google_Service_Cloudbilling_ProjectBillingInfo $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Cloudbilling_ProjectBillingInfo
   */
  public function updateBillingInfo($name, Google_Service_Cloudbilling_ProjectBillingInfo $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateBillingInfo', array($params), "Google_Service_Cloudbilling_ProjectBillingInfo");
  }
}
