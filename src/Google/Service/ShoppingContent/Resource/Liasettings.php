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
 * The "liasettings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $liasettings = $contentService->liasettings;
 *  </code>
 */
class Google_Service_ShoppingContent_Resource_Liasettings extends Google_Service_Resource
{
  /**
   *  (liasettings.custombatch)
   *
   * @param Google_Service_ShoppingContent_LiasettingsCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_LiasettingsCustomBatchResponse
   */
  public function custombatch(Google_Service_ShoppingContent_LiasettingsCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), "Google_Service_ShoppingContent_LiasettingsCustomBatchResponse");
  }
  /**
   *  (liasettings.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_LiaSettings
   */
  public function get($merchantId, $accountId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ShoppingContent_LiaSettings");
  }
  /**
   *  (liasettings.getaccessiblegmbaccounts)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_LiasettingsGetAccessibleGmbAccountsResponse
   */
  public function getaccessiblegmbaccounts($merchantId, $accountId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('getaccessiblegmbaccounts', array($params), "Google_Service_ShoppingContent_LiasettingsGetAccessibleGmbAccountsResponse");
  }
  /**
   *  (liasettings.listLiasettings)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_LiasettingsListResponse
   */
  public function listLiasettings($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ShoppingContent_LiasettingsListResponse");
  }
  /**
   *  (liasettings.listposdataproviders)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_LiasettingsListPosDataProvidersResponse
   */
  public function listposdataproviders($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('listposdataproviders', array($params), "Google_Service_ShoppingContent_LiasettingsListPosDataProvidersResponse");
  }
  /**
   *  (liasettings.patch)
   *
   * @param Google_Service_ShoppingContent_LiaSettings $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_LiaSettings
   */
  public function patch($merchantId, $accountId, Google_Service_ShoppingContent_LiaSettings $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_ShoppingContent_LiaSettings");
  }
  /**
   *  (liasettings.requestgmbaccess)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_LiasettingsRequestGmbAccessResponse
   */
  public function requestgmbaccess($merchantId, $accountId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('requestgmbaccess', array($params), "Google_Service_ShoppingContent_LiasettingsRequestGmbAccessResponse");
  }
  /**
   *  (liasettings.requestinventoryverification)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_LiasettingsRequestInventoryVerificationResponse
   */
  public function requestinventoryverification($merchantId, $accountId, $country, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId, 'country' => $country);
    $params = array_merge($params, $optParams);
    return $this->call('requestinventoryverification', array($params), "Google_Service_ShoppingContent_LiasettingsRequestInventoryVerificationResponse");
  }
  /**
   *  (liasettings.setinventoryverificationcontact)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_LiasettingsSetInventoryVerificationContactResponse
   */
  public function setinventoryverificationcontact($merchantId, $accountId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('setinventoryverificationcontact', array($params), "Google_Service_ShoppingContent_LiasettingsSetInventoryVerificationContactResponse");
  }
  /**
   *  (liasettings.setposdataprovider)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_LiasettingsSetPosDataProviderResponse
   */
  public function setposdataprovider($merchantId, $accountId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('setposdataprovider', array($params), "Google_Service_ShoppingContent_LiasettingsSetPosDataProviderResponse");
  }
  /**
   *  (liasettings.update)
   *
   * @param Google_Service_ShoppingContent_LiaSettings $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_LiaSettings
   */
  public function update($merchantId, $accountId, Google_Service_ShoppingContent_LiaSettings $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'accountId' => $accountId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_ShoppingContent_LiaSettings");
  }
}
