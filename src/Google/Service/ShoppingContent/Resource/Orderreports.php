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
 * The "orderreports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $orderreports = $contentService->orderreports;
 *  </code>
 */
class Google_Service_ShoppingContent_Resource_Orderreports extends Google_Service_Resource
{
  /**
   *  (orderreports.listdisbursements)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_OrderreportsListDisbursementsResponse
   */
  public function listdisbursements($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('listdisbursements', array($params), "Google_Service_ShoppingContent_OrderreportsListDisbursementsResponse");
  }
  /**
   *  (orderreports.listtransactions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_OrderreportsListTransactionsResponse
   */
  public function listtransactions($merchantId, $disbursementId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'disbursementId' => $disbursementId);
    $params = array_merge($params, $optParams);
    return $this->call('listtransactions', array($params), "Google_Service_ShoppingContent_OrderreportsListTransactionsResponse");
  }
}
