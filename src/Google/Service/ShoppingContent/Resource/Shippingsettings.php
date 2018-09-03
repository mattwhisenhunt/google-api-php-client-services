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
 * The "shippingsettings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $shippingsettings = $contentService->shippingsettings;
 *  </code>
 */
class Google_Service_ShoppingContent_Resource_Shippingsettings extends Google_Service_Resource
{
  /**
   *  (shippingsettings.custombatch)
   *
   * @param Google_Service_ShoppingContent_ShippingsettingsCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_ShippingsettingsCustomBatchResponse
   */
  public function custombatch(Google_Service_ShoppingContent_ShippingsettingsCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), "Google_Service_ShoppingContent_ShippingsettingsCustomBatchResponse");
  }
  /**
   *  (shippingsettings.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_ShippingSettings
   */
  public function get($merchantId, $accountId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ShoppingContent_ShippingSettings");
  }
  /**
   *  (shippingsettings.getsupportedcarriers)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_ShippingsettingsGetSupportedCarriersResponse
   */
  public function getsupportedcarriers($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('getsupportedcarriers', array($params), "Google_Service_ShoppingContent_ShippingsettingsGetSupportedCarriersResponse");
  }
  /**
   *  (shippingsettings.getsupportedholidays)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_ShippingsettingsGetSupportedHolidaysResponse
   */
  public function getsupportedholidays($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('getsupportedholidays', array($params), "Google_Service_ShoppingContent_ShippingsettingsGetSupportedHolidaysResponse");
  }
  /**
   *  (shippingsettings.listShippingsettings)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_ShippingsettingsListResponse
   */
  public function listShippingsettings($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ShoppingContent_ShippingsettingsListResponse");
  }
  /**
   *  (shippingsettings.patch)
   *
   * @param Google_Service_ShoppingContent_ShippingSettings $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_ShippingSettings
   */
  public function patch($merchantId, $accountId, Google_Service_ShoppingContent_ShippingSettings $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_ShoppingContent_ShippingSettings");
  }
  /**
   *  (shippingsettings.update)
   *
   * @param Google_Service_ShoppingContent_ShippingSettings $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_ShippingSettings
   */
  public function update($merchantId, $accountId, Google_Service_ShoppingContent_ShippingSettings $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_ShoppingContent_ShippingSettings");
  }
}
