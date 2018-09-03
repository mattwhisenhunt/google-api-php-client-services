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
 * The "adunits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsensehostService = new Google_Service_AdSenseHost(...);
 *   $adunits = $adsensehostService->adunits;
 *  </code>
 */
class Google_Service_AdSenseHost_Resource_AccountsAdunits extends Google_Service_Resource
{
  /**
   *  (adunits.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdSenseHost_AdUnit
   */
  public function delete($accountId, $adClientId, $adUnitId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_AdSenseHost_AdUnit");
  }
  /**
   *  (adunits.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdSenseHost_AdUnit
   */
  public function get($accountId, $adClientId, $adUnitId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AdSenseHost_AdUnit");
  }
  /**
   *  (adunits.getAdCode)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AdSenseHost_AdCode
   */
  public function getAdCode($accountId, $adClientId, $adUnitId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId);
    $params = array_merge($params, $optParams);
    return $this->call('getAdCode', array($params), "Google_Service_AdSenseHost_AdCode");
  }
  /**
   *  (adunits.insert)
   *
   * @param Google_Service_AdSenseHost_AdUnit $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdSenseHost_AdUnit
   */
  public function insert($accountId, $adClientId, Google_Service_AdSenseHost_AdUnit $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_AdSenseHost_AdUnit");
  }
  /**
   *  (adunits.listAccountsAdunits)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AdSenseHost_AdUnits
   */
  public function listAccountsAdunits($accountId, $adClientId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AdSenseHost_AdUnits");
  }
  /**
   *  (adunits.patch)
   *
   * @param Google_Service_AdSenseHost_AdUnit $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdSenseHost_AdUnit
   */
  public function patch($accountId, $adClientId, $adUnitId, Google_Service_AdSenseHost_AdUnit $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_AdSenseHost_AdUnit");
  }
  /**
   *  (adunits.update)
   *
   * @param Google_Service_AdSenseHost_AdUnit $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdSenseHost_AdUnit
   */
  public function update($accountId, $adClientId, Google_Service_AdSenseHost_AdUnit $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_AdSenseHost_AdUnit");
  }
}
