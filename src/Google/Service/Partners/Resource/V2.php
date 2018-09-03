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
 * The "v2" collection of methods.
 * Typical usage is:
 *  <code>
 *   $partnersService = new Google_Service_Partners(...);
 *   $v2 = $partnersService->v2;
 *  </code>
 */
class Google_Service_Partners_Resource_V2 extends Google_Service_Resource
{
  /**
   *  (v2.getPartnersstatus)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Partners_GetPartnersStatusResponse
   */
  public function getPartnersstatus($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getPartnersstatus', array($params), "Google_Service_Partners_GetPartnersStatusResponse");
  }
  /**
   *  (v2.updateCompanies)
   *
   * @param Google_Service_Partners_Company $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Partners_Company
   */
  public function updateCompanies(Google_Service_Partners_Company $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateCompanies', array($params), "Google_Service_Partners_Company");
  }
  /**
   *  (v2.updateLeads)
   *
   * @param Google_Service_Partners_Lead $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Partners_Lead
   */
  public function updateLeads(Google_Service_Partners_Lead $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateLeads', array($params), "Google_Service_Partners_Lead");
  }
}
