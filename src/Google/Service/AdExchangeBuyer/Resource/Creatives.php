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
 * The "creatives" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyerService = new Google_Service_AdExchangeBuyer(...);
 *   $creatives = $adexchangebuyerService->creatives;
 *  </code>
 */
class Google_Service_AdExchangeBuyer_Resource_Creatives extends Google_Service_Resource
{
  /**
   *  (creatives.addDeal)
   *
   * @param array $optParams Optional parameters.

   */
  public function addDeal($accountId, $buyerCreativeId, $dealId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'buyerCreativeId' => $buyerCreativeId, 'dealId' => $dealId);
    $params = array_merge($params, $optParams);
    return $this->call('addDeal', array($params));
  }
  /**
   *  (creatives.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_Creative
   */
  public function get($accountId, $buyerCreativeId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'buyerCreativeId' => $buyerCreativeId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AdExchangeBuyer_Creative");
  }
  /**
   *  (creatives.insert)
   *
   * @param Google_Service_AdExchangeBuyer_Creative $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_Creative
   */
  public function insert(Google_Service_AdExchangeBuyer_Creative $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_AdExchangeBuyer_Creative");
  }
  /**
   *  (creatives.listCreatives)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AdExchangeBuyer_CreativesList
   */
  public function listCreatives($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AdExchangeBuyer_CreativesList");
  }
  /**
   *  (creatives.listDeals)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_CreativeDealIds
   */
  public function listDeals($accountId, $buyerCreativeId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'buyerCreativeId' => $buyerCreativeId);
    $params = array_merge($params, $optParams);
    return $this->call('listDeals', array($params), "Google_Service_AdExchangeBuyer_CreativeDealIds");
  }
  /**
   *  (creatives.removeDeal)
   *
   * @param array $optParams Optional parameters.

   */
  public function removeDeal($accountId, $buyerCreativeId, $dealId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'buyerCreativeId' => $buyerCreativeId, 'dealId' => $dealId);
    $params = array_merge($params, $optParams);
    return $this->call('removeDeal', array($params));
  }
}
