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
 * The "conversion" collection of methods.
 * Typical usage is:
 *  <code>
 *   $doubleclicksearchService = new Google_Service_Doubleclicksearch(...);
 *   $conversion = $doubleclicksearchService->conversion;
 *  </code>
 */
class Google_Service_Doubleclicksearch_Resource_Conversion extends Google_Service_Resource
{
  /**
   *  (conversion.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Doubleclicksearch_ConversionList
   */
  public function get($agencyId, $advertiserId, $engineAccountId, $endDate, $rowCount, $startDate, $startRow, $optParams = array())
  {
    $params = array('agencyId' => $agencyId, 'advertiserId' => $advertiserId, 'engineAccountId' => $engineAccountId, 'endDate' => $endDate, 'rowCount' => $rowCount, 'startDate' => $startDate, 'startRow' => $startRow);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Doubleclicksearch_ConversionList");
  }
  /**
   *  (conversion.insert)
   *
   * @param Google_Service_Doubleclicksearch_ConversionList $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Doubleclicksearch_ConversionList
   */
  public function insert(Google_Service_Doubleclicksearch_ConversionList $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Doubleclicksearch_ConversionList");
  }
  /**
   *  (conversion.patch)
   *
   * @param Google_Service_Doubleclicksearch_ConversionList $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Doubleclicksearch_ConversionList
   */
  public function patch($advertiserId, $agencyId, $endDate, $engineAccountId, $rowCount, $startDate, $startRow, Google_Service_Doubleclicksearch_ConversionList $postBody, $optParams = array())
  {
    $params = array('advertiserId' => $advertiserId, 'agencyId' => $agencyId, 'endDate' => $endDate, 'engineAccountId' => $engineAccountId, 'rowCount' => $rowCount, 'startDate' => $startDate, 'startRow' => $startRow ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Doubleclicksearch_ConversionList");
  }
  /**
   *  (conversion.update)
   *
   * @param Google_Service_Doubleclicksearch_ConversionList $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Doubleclicksearch_ConversionList
   */
  public function update(Google_Service_Doubleclicksearch_ConversionList $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Doubleclicksearch_ConversionList");
  }
  /**
   *  (conversion.updateAvailability)
   *
   * @param Google_Service_Doubleclicksearch_UpdateAvailabilityRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Doubleclicksearch_UpdateAvailabilityResponse
   */
  public function updateAvailability(Google_Service_Doubleclicksearch_UpdateAvailabilityRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateAvailability', array($params), "Google_Service_Doubleclicksearch_UpdateAvailabilityResponse");
  }
}
