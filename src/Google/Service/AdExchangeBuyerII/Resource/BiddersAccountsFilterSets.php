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
 * The "filterSets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyer2Service = new Google_Service_AdExchangeBuyerII(...);
 *   $filterSets = $adexchangebuyer2Service->filterSets;
 *  </code>
 */
class Google_Service_AdExchangeBuyerII_Resource_BiddersAccountsFilterSets extends Google_Service_Resource
{
  /**
   *  (filterSets.create)
   *
   * @param Google_Service_AdExchangeBuyerII_FilterSet $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AdExchangeBuyerII_FilterSet
   */
  public function create($ownerName, Google_Service_AdExchangeBuyerII_FilterSet $postBody, $optParams = array())
  {
    $params = array('ownerName' => $ownerName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_AdExchangeBuyerII_FilterSet");
  }
  /**
   *  (filterSets.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Adexchangebuyer2Empty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_AdExchangeBuyerII_Adexchangebuyer2Empty");
  }
  /**
   *  (filterSets.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_FilterSet
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AdExchangeBuyerII_FilterSet");
  }
  /**
   *  (filterSets.listBiddersAccountsFilterSets)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AdExchangeBuyerII_ListFilterSetsResponse
   */
  public function listBiddersAccountsFilterSets($ownerName, $optParams = array())
  {
    $params = array('ownerName' => $ownerName);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AdExchangeBuyerII_ListFilterSetsResponse");
  }
}
