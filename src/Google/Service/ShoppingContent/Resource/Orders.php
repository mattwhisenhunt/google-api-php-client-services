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
 * The "orders" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $orders = $contentService->orders;
 *  </code>
 */
class Google_Service_ShoppingContent_Resource_Orders extends Google_Service_Resource
{
  /**
   *  (orders.acknowledge)
   *
   * @param Google_Service_ShoppingContent_OrdersAcknowledgeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersAcknowledgeResponse
   */
  public function acknowledge($merchantId, $orderId, Google_Service_ShoppingContent_OrdersAcknowledgeRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('acknowledge', array($params), "Google_Service_ShoppingContent_OrdersAcknowledgeResponse");
  }
  /**
   *  (orders.advancetestorder)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersAdvanceTestOrderResponse
   */
  public function advancetestorder($merchantId, $orderId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId);
    $params = array_merge($params, $optParams);
    return $this->call('advancetestorder', array($params), "Google_Service_ShoppingContent_OrdersAdvanceTestOrderResponse");
  }
  /**
   *  (orders.cancel)
   *
   * @param Google_Service_ShoppingContent_OrdersCancelRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersCancelResponse
   */
  public function cancel($merchantId, $orderId, Google_Service_ShoppingContent_OrdersCancelRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params), "Google_Service_ShoppingContent_OrdersCancelResponse");
  }
  /**
   *  (orders.cancellineitem)
   *
   * @param Google_Service_ShoppingContent_OrdersCancelLineItemRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersCancelLineItemResponse
   */
  public function cancellineitem($merchantId, $orderId, Google_Service_ShoppingContent_OrdersCancelLineItemRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('cancellineitem', array($params), "Google_Service_ShoppingContent_OrdersCancelLineItemResponse");
  }
  /**
   *  (orders.canceltestorderbycustomer)
   *
   * @param Google_Service_ShoppingContent_OrdersCancelTestOrderByCustomerRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersCancelTestOrderByCustomerResponse
   */
  public function canceltestorderbycustomer($merchantId, $orderId, Google_Service_ShoppingContent_OrdersCancelTestOrderByCustomerRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('canceltestorderbycustomer', array($params), "Google_Service_ShoppingContent_OrdersCancelTestOrderByCustomerResponse");
  }
  /**
   *  (orders.createtestorder)
   *
   * @param Google_Service_ShoppingContent_OrdersCreateTestOrderRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersCreateTestOrderResponse
   */
  public function createtestorder($merchantId, Google_Service_ShoppingContent_OrdersCreateTestOrderRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createtestorder', array($params), "Google_Service_ShoppingContent_OrdersCreateTestOrderResponse");
  }
  /**
   *  (orders.custombatch)
   *
   * @param Google_Service_ShoppingContent_OrdersCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersCustomBatchResponse
   */
  public function custombatch(Google_Service_ShoppingContent_OrdersCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), "Google_Service_ShoppingContent_OrdersCustomBatchResponse");
  }
  /**
   *  (orders.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_Order
   */
  public function get($merchantId, $orderId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ShoppingContent_Order");
  }
  /**
   *  (orders.getbymerchantorderid)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersGetByMerchantOrderIdResponse
   */
  public function getbymerchantorderid($merchantId, $merchantOrderId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'merchantOrderId' => $merchantOrderId);
    $params = array_merge($params, $optParams);
    return $this->call('getbymerchantorderid', array($params), "Google_Service_ShoppingContent_OrdersGetByMerchantOrderIdResponse");
  }
  /**
   *  (orders.gettestordertemplate)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_OrdersGetTestOrderTemplateResponse
   */
  public function gettestordertemplate($merchantId, $templateName, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'templateName' => $templateName);
    $params = array_merge($params, $optParams);
    return $this->call('gettestordertemplate', array($params), "Google_Service_ShoppingContent_OrdersGetTestOrderTemplateResponse");
  }
  /**
   *  (orders.instorerefundlineitem)
   *
   * @param Google_Service_ShoppingContent_OrdersInStoreRefundLineItemRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersInStoreRefundLineItemResponse
   */
  public function instorerefundlineitem($merchantId, $orderId, Google_Service_ShoppingContent_OrdersInStoreRefundLineItemRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('instorerefundlineitem', array($params), "Google_Service_ShoppingContent_OrdersInStoreRefundLineItemResponse");
  }
  /**
   *  (orders.listOrders)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ShoppingContent_OrdersListResponse
   */
  public function listOrders($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ShoppingContent_OrdersListResponse");
  }
  /**
   *  (orders.refund)
   *
   * @param Google_Service_ShoppingContent_OrdersRefundRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersRefundResponse
   */
  public function refund($merchantId, $orderId, Google_Service_ShoppingContent_OrdersRefundRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('refund', array($params), "Google_Service_ShoppingContent_OrdersRefundResponse");
  }
  /**
   *  (orders.rejectreturnlineitem)
   *
   * @param Google_Service_ShoppingContent_OrdersRejectReturnLineItemRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersRejectReturnLineItemResponse
   */
  public function rejectreturnlineitem($merchantId, $orderId, Google_Service_ShoppingContent_OrdersRejectReturnLineItemRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('rejectreturnlineitem', array($params), "Google_Service_ShoppingContent_OrdersRejectReturnLineItemResponse");
  }
  /**
   *  (orders.returnlineitem)
   *
   * @param Google_Service_ShoppingContent_OrdersReturnLineItemRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersReturnLineItemResponse
   */
  public function returnlineitem($merchantId, $orderId, Google_Service_ShoppingContent_OrdersReturnLineItemRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('returnlineitem', array($params), "Google_Service_ShoppingContent_OrdersReturnLineItemResponse");
  }
  /**
   *  (orders.returnrefundlineitem)
   *
   * @param Google_Service_ShoppingContent_OrdersReturnRefundLineItemRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersReturnRefundLineItemResponse
   */
  public function returnrefundlineitem($merchantId, $orderId, Google_Service_ShoppingContent_OrdersReturnRefundLineItemRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('returnrefundlineitem', array($params), "Google_Service_ShoppingContent_OrdersReturnRefundLineItemResponse");
  }
  /**
   *  (orders.setlineitemmetadata)
   *
   * @param Google_Service_ShoppingContent_OrdersSetLineItemMetadataRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersSetLineItemMetadataResponse
   */
  public function setlineitemmetadata($merchantId, $orderId, Google_Service_ShoppingContent_OrdersSetLineItemMetadataRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setlineitemmetadata', array($params), "Google_Service_ShoppingContent_OrdersSetLineItemMetadataResponse");
  }
  /**
   *  (orders.shiplineitems)
   *
   * @param Google_Service_ShoppingContent_OrdersShipLineItemsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersShipLineItemsResponse
   */
  public function shiplineitems($merchantId, $orderId, Google_Service_ShoppingContent_OrdersShipLineItemsRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('shiplineitems', array($params), "Google_Service_ShoppingContent_OrdersShipLineItemsResponse");
  }
  /**
   *  (orders.updatelineitemshippingdetails)
   *
   * @param Google_Service_ShoppingContent_OrdersUpdateLineItemShippingDetailsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersUpdateLineItemShippingDetailsResponse
   */
  public function updatelineitemshippingdetails($merchantId, $orderId, Google_Service_ShoppingContent_OrdersUpdateLineItemShippingDetailsRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updatelineitemshippingdetails', array($params), "Google_Service_ShoppingContent_OrdersUpdateLineItemShippingDetailsResponse");
  }
  /**
   *  (orders.updatemerchantorderid)
   *
   * @param Google_Service_ShoppingContent_OrdersUpdateMerchantOrderIdRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersUpdateMerchantOrderIdResponse
   */
  public function updatemerchantorderid($merchantId, $orderId, Google_Service_ShoppingContent_OrdersUpdateMerchantOrderIdRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updatemerchantorderid', array($params), "Google_Service_ShoppingContent_OrdersUpdateMerchantOrderIdResponse");
  }
  /**
   *  (orders.updateshipment)
   *
   * @param Google_Service_ShoppingContent_OrdersUpdateShipmentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrdersUpdateShipmentResponse
   */
  public function updateshipment($merchantId, $orderId, Google_Service_ShoppingContent_OrdersUpdateShipmentRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateshipment', array($params), "Google_Service_ShoppingContent_OrdersUpdateShipmentResponse");
  }
}
