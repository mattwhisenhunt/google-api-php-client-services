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
 * The "storelayoutpages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $storelayoutpages = $androidenterpriseService->storelayoutpages;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Resource_Storelayoutpages extends Google_Service_Resource
{
  /**
   *  (storelayoutpages.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($enterpriseId, $pageId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'pageId' => $pageId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (storelayoutpages.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_StorePage
   */
  public function get($enterpriseId, $pageId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'pageId' => $pageId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AndroidEnterprise_StorePage");
  }
  /**
   *  (storelayoutpages.insert)
   *
   * @param Google_Service_AndroidEnterprise_StorePage $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_StorePage
   */
  public function insert($enterpriseId, Google_Service_AndroidEnterprise_StorePage $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_AndroidEnterprise_StorePage");
  }
  /**
   *  (storelayoutpages.listStorelayoutpages)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_StoreLayoutPagesListResponse
   */
  public function listStorelayoutpages($enterpriseId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AndroidEnterprise_StoreLayoutPagesListResponse");
  }
  /**
   *  (storelayoutpages.patch)
   *
   * @param Google_Service_AndroidEnterprise_StorePage $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_StorePage
   */
  public function patch($enterpriseId, $pageId, Google_Service_AndroidEnterprise_StorePage $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'pageId' => $pageId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_AndroidEnterprise_StorePage");
  }
  /**
   *  (storelayoutpages.update)
   *
   * @param Google_Service_AndroidEnterprise_StorePage $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_StorePage
   */
  public function update($enterpriseId, $pageId, Google_Service_AndroidEnterprise_StorePage $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'pageId' => $pageId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_AndroidEnterprise_StorePage");
  }
}
