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
 * The "marketplacedeals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyerService = new Google_Service_AdExchangeBuyer(...);
 *   $marketplacedeals = $adexchangebuyerService->marketplacedeals;
 *  </code>
 */
class Google_Service_AdExchangeBuyer_Resource_Marketplacedeals extends Google_Service_Resource
{
  /**
   *  (marketplacedeals.delete)
   *
   * @param Google_Service_AdExchangeBuyer_DeleteOrderDealsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_DeleteOrderDealsResponse
   */
  public function delete($proposalId, Google_Service_AdExchangeBuyer_DeleteOrderDealsRequest $postBody, $optParams = array())
  {
    $params = array('proposalId' => $proposalId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_AdExchangeBuyer_DeleteOrderDealsResponse");
  }
  /**
   *  (marketplacedeals.insert)
   *
   * @param Google_Service_AdExchangeBuyer_AddOrderDealsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_AddOrderDealsResponse
   */
  public function insert($proposalId, Google_Service_AdExchangeBuyer_AddOrderDealsRequest $postBody, $optParams = array())
  {
    $params = array('proposalId' => $proposalId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_AdExchangeBuyer_AddOrderDealsResponse");
  }
  /**
   *  (marketplacedeals.listMarketplacedeals)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AdExchangeBuyer_GetOrderDealsResponse
   */
  public function listMarketplacedeals($proposalId, $optParams = array())
  {
    $params = array('proposalId' => $proposalId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AdExchangeBuyer_GetOrderDealsResponse");
  }
  /**
   *  (marketplacedeals.update)
   *
   * @param Google_Service_AdExchangeBuyer_EditAllOrderDealsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_EditAllOrderDealsResponse
   */
  public function update($proposalId, Google_Service_AdExchangeBuyer_EditAllOrderDealsRequest $postBody, $optParams = array())
  {
    $params = array('proposalId' => $proposalId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_AdExchangeBuyer_EditAllOrderDealsResponse");
  }
}
