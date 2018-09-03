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
 * The "dealAssociations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyer2Service = new Google_Service_AdExchangeBuyerII(...);
 *   $dealAssociations = $adexchangebuyer2Service->dealAssociations;
 *  </code>
 */
class Google_Service_AdExchangeBuyerII_Resource_AccountsCreativesDealAssociations extends Google_Service_Resource
{
  /**
   *  (dealAssociations.add)
   *
   * @param Google_Service_AdExchangeBuyerII_AddDealAssociationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Adexchangebuyer2Empty
   */
  public function add($accountId, $creativeId, Google_Service_AdExchangeBuyerII_AddDealAssociationRequest $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'creativeId' => $creativeId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('add', array($params), "Google_Service_AdExchangeBuyerII_Adexchangebuyer2Empty");
  }
  /**
   *  (dealAssociations.listAccountsCreativesDealAssociations)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AdExchangeBuyerII_ListDealAssociationsResponse
   */
  public function listAccountsCreativesDealAssociations($accountId, $creativeId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'creativeId' => $creativeId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AdExchangeBuyerII_ListDealAssociationsResponse");
  }
  /**
   *  (dealAssociations.remove)
   *
   * @param Google_Service_AdExchangeBuyerII_RemoveDealAssociationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Adexchangebuyer2Empty
   */
  public function remove($accountId, $creativeId, Google_Service_AdExchangeBuyerII_RemoveDealAssociationRequest $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'creativeId' => $creativeId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('remove', array($params), "Google_Service_AdExchangeBuyerII_Adexchangebuyer2Empty");
  }
}
