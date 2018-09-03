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
 * The "products" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $products = $androidenterpriseService->products;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Resource_Products extends Google_Service_Resource
{
  /**
   *  (products.approve)
   *
   * @param Google_Service_AndroidEnterprise_ProductsApproveRequest $postBody
   * @param array $optParams Optional parameters.

   */
  public function approve($enterpriseId, $productId, Google_Service_AndroidEnterprise_ProductsApproveRequest $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('approve', array($params));
  }
  /**
   *  (products.generateApprovalUrl)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AndroidEnterprise_ProductsGenerateApprovalUrlResponse
   */
  public function generateApprovalUrl($enterpriseId, $productId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId);
    $params = array_merge($params, $optParams);
    return $this->call('generateApprovalUrl', array($params), "Google_Service_AndroidEnterprise_ProductsGenerateApprovalUrlResponse");
  }
  /**
   *  (products.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AndroidEnterprise_Product
   */
  public function get($enterpriseId, $productId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AndroidEnterprise_Product");
  }
  /**
   *  (products.getAppRestrictionsSchema)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AndroidEnterprise_AppRestrictionsSchema
   */
  public function getAppRestrictionsSchema($enterpriseId, $productId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId);
    $params = array_merge($params, $optParams);
    return $this->call('getAppRestrictionsSchema', array($params), "Google_Service_AndroidEnterprise_AppRestrictionsSchema");
  }
  /**
   *  (products.getPermissions)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_ProductPermissions
   */
  public function getPermissions($enterpriseId, $productId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId);
    $params = array_merge($params, $optParams);
    return $this->call('getPermissions', array($params), "Google_Service_AndroidEnterprise_ProductPermissions");
  }
  /**
   *  (products.listProducts)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AndroidEnterprise_ProductsListResponse
   */
  public function listProducts($enterpriseId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AndroidEnterprise_ProductsListResponse");
  }
  /**
   *  (products.unapprove)
   *
   * @param array $optParams Optional parameters.

   */
  public function unapprove($enterpriseId, $productId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId);
    $params = array_merge($params, $optParams);
    return $this->call('unapprove', array($params));
  }
}
