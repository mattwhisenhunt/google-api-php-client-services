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
 * The "accounttax" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $accounttax = $contentService->accounttax;
 *  </code>
 */
class Google_Service_ShoppingContent_Resource_Accounttax extends Google_Service_Resource
{
  /**
   *  (accounttax.custombatch)
   *
   * @param Google_Service_ShoppingContent_AccounttaxCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_AccounttaxCustomBatchResponse
   */
  public function custombatch(Google_Service_ShoppingContent_AccounttaxCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), "Google_Service_ShoppingContent_AccounttaxCustomBatchResponse");
  }
  /**
   *  (accounttax.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_AccountTax
   */
  public function get($merchantId, $accountId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ShoppingContent_AccountTax");
  }
  /**
   *  (accounttax.listAccounttax)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_AccounttaxListResponse
   */
  public function listAccounttax($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ShoppingContent_AccounttaxListResponse");
  }
  /**
   *  (accounttax.patch)
   *
   * @param Google_Service_ShoppingContent_AccountTax $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_AccountTax
   */
  public function patch($merchantId, $accountId, Google_Service_ShoppingContent_AccountTax $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_ShoppingContent_AccountTax");
  }
  /**
   *  (accounttax.update)
   *
   * @param Google_Service_ShoppingContent_AccountTax $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_AccountTax
   */
  public function update($merchantId, $accountId, Google_Service_ShoppingContent_AccountTax $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_ShoppingContent_AccountTax");
  }
}
