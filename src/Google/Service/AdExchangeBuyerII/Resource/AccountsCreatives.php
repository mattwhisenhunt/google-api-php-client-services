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
 *   $adexchangebuyer2Service = new Google_Service_AdExchangeBuyerII(...);
 *   $creatives = $adexchangebuyer2Service->creatives;
 *  </code>
 */
class Google_Service_AdExchangeBuyerII_Resource_AccountsCreatives extends Google_Service_Resource
{
  /**
   *  (creatives.create)
   *
   * @param Google_Service_AdExchangeBuyerII_Creative $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AdExchangeBuyerII_Creative
   */
  public function create($accountId, Google_Service_AdExchangeBuyerII_Creative $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_AdExchangeBuyerII_Creative");
  }
  /**
   *  (creatives.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Creative
   */
  public function get($accountId, $creativeId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'creativeId' => $creativeId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AdExchangeBuyerII_Creative");
  }
  /**
   *  (creatives.listAccountsCreatives)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AdExchangeBuyerII_ListCreativesResponse
   */
  public function listAccountsCreatives($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AdExchangeBuyerII_ListCreativesResponse");
  }
  /**
   *  (creatives.stopWatching)
   *
   * @param Google_Service_AdExchangeBuyerII_StopWatchingCreativeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Adexchangebuyer2Empty
   */
  public function stopWatching($accountId, $creativeId, Google_Service_AdExchangeBuyerII_StopWatchingCreativeRequest $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'creativeId' => $creativeId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('stopWatching', array($params), "Google_Service_AdExchangeBuyerII_Adexchangebuyer2Empty");
  }
  /**
   *  (creatives.update)
   *
   * @param Google_Service_AdExchangeBuyerII_Creative $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Creative
   */
  public function update($accountId, $creativeId, Google_Service_AdExchangeBuyerII_Creative $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'creativeId' => $creativeId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_AdExchangeBuyerII_Creative");
  }
  /**
   *  (creatives.watch)
   *
   * @param Google_Service_AdExchangeBuyerII_WatchCreativeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Adexchangebuyer2Empty
   */
  public function watch($accountId, $creativeId, Google_Service_AdExchangeBuyerII_WatchCreativeRequest $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'creativeId' => $creativeId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), "Google_Service_AdExchangeBuyerII_Adexchangebuyer2Empty");
  }
}
