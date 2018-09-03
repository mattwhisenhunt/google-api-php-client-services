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
 *   $manufacturersService = new Google_Service_ManufacturerCenter(...);
 *   $products = $manufacturersService->products;
 *  </code>
 */
class Google_Service_ManufacturerCenter_Resource_AccountsProducts extends Google_Service_Resource
{
  /**
   *  (products.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ManufacturerCenter_ManufacturersEmpty
   */
  public function delete($parent, $name, $optParams = array())
  {
    $params = array('parent' => $parent, 'name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_ManufacturerCenter_ManufacturersEmpty");
  }
  /**
   *  (products.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ManufacturerCenter_Product
   */
  public function get($parent, $name, $optParams = array())
  {
    $params = array('parent' => $parent, 'name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ManufacturerCenter_Product");
  }
  /**
   *  (products.listAccountsProducts)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_ManufacturerCenter_ListProductsResponse
   */
  public function listAccountsProducts($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ManufacturerCenter_ListProductsResponse");
  }
  /**
   *  (products.update)
   *
   * @param Google_Service_ManufacturerCenter_Attributes $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ManufacturerCenter_ManufacturersEmpty
   */
  public function update($parent, $name, Google_Service_ManufacturerCenter_Attributes $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_ManufacturerCenter_ManufacturersEmpty");
  }
}
