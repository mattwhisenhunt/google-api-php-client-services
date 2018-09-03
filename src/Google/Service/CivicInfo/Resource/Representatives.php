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
 * The "representatives" collection of methods.
 * Typical usage is:
 *  <code>
 *   $civicinfoService = new Google_Service_CivicInfo(...);
 *   $representatives = $civicinfoService->representatives;
 *  </code>
 */
class Google_Service_CivicInfo_Resource_Representatives extends Google_Service_Resource
{
  /**
   *  (representatives.representativeInfoByAddress)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CivicInfo_RepresentativeInfoResponse
   */
  public function representativeInfoByAddress($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('representativeInfoByAddress', array($params), "Google_Service_CivicInfo_RepresentativeInfoResponse");
  }
  /**
   *  (representatives.representativeInfoByDivision)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CivicInfo_RepresentativeInfoData
   */
  public function representativeInfoByDivision($ocdId, $optParams = array())
  {
    $params = array('ocdId' => $ocdId);
    $params = array_merge($params, $optParams);
    return $this->call('representativeInfoByDivision', array($params), "Google_Service_CivicInfo_RepresentativeInfoData");
  }
}
