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
 * The "pos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $pos = $contentService->pos;
 *  </code>
 */
class Google_Service_ShoppingContent_Resource_Pos extends Google_Service_Resource
{
  /**
   *  (pos.custombatch)
   *
   * @param Google_Service_ShoppingContent_PosCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_PosCustomBatchResponse
   */
  public function custombatch(Google_Service_ShoppingContent_PosCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), "Google_Service_ShoppingContent_PosCustomBatchResponse");
  }
  /**
   *  (pos.delete)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function delete($merchantId, $targetMerchantId, $storeCode, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'targetMerchantId' => $targetMerchantId, 'storeCode' => $storeCode);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (pos.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_PosStore
   */
  public function get($merchantId, $targetMerchantId, $storeCode, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'targetMerchantId' => $targetMerchantId, 'storeCode' => $storeCode);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ShoppingContent_PosStore");
  }
  /**
   *  (pos.insert)
   *
   * @param Google_Service_ShoppingContent_PosStore $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_PosStore
   */
  public function insert($merchantId, $targetMerchantId, Google_Service_ShoppingContent_PosStore $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'targetMerchantId' => $targetMerchantId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_ShoppingContent_PosStore");
  }
  /**
   *  (pos.inventory)
   *
   * @param Google_Service_ShoppingContent_PosInventoryRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_PosInventoryResponse
   */
  public function inventory($merchantId, $targetMerchantId, Google_Service_ShoppingContent_PosInventoryRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'targetMerchantId' => $targetMerchantId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('inventory', array($params), "Google_Service_ShoppingContent_PosInventoryResponse");
  }
  /**
   *  (pos.listPos)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_PosListResponse
   */
  public function listPos($merchantId, $targetMerchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'targetMerchantId' => $targetMerchantId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ShoppingContent_PosListResponse");
  }
  /**
   *  (pos.sale)
   *
   * @param Google_Service_ShoppingContent_PosSaleRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_PosSaleResponse
   */
  public function sale($merchantId, $targetMerchantId, Google_Service_ShoppingContent_PosSaleRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'targetMerchantId' => $targetMerchantId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('sale', array($params), "Google_Service_ShoppingContent_PosSaleResponse");
  }
}
