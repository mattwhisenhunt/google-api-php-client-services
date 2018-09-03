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
 * The "proposals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyerService = new Google_Service_AdExchangeBuyer(...);
 *   $proposals = $adexchangebuyerService->proposals;
 *  </code>
 */
class Google_Service_AdExchangeBuyer_Resource_Proposals extends Google_Service_Resource
{
  /**
   *  (proposals.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_Proposal
   */
  public function get($proposalId, $optParams = array())
  {
    $params = array('proposalId' => $proposalId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AdExchangeBuyer_Proposal");
  }
  /**
   *  (proposals.insert)
   *
   * @param Google_Service_AdExchangeBuyer_CreateOrdersRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_CreateOrdersResponse
   */
  public function insert(Google_Service_AdExchangeBuyer_CreateOrdersRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_AdExchangeBuyer_CreateOrdersResponse");
  }
  /**
   *  (proposals.patch)
   *
   * @param Google_Service_AdExchangeBuyer_Proposal $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_Proposal
   */
  public function patch($proposalId, $revisionNumber, $updateAction, Google_Service_AdExchangeBuyer_Proposal $postBody, $optParams = array())
  {
    $params = array('proposalId' => $proposalId, 'revisionNumber' => $revisionNumber, 'updateAction' => $updateAction ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_AdExchangeBuyer_Proposal");
  }
  /**
   *  (proposals.search)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AdExchangeBuyer_GetOrdersResponse
   */
  public function search($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_AdExchangeBuyer_GetOrdersResponse");
  }
  /**
   *  (proposals.setupcomplete)
   *
   * @param array $optParams Optional parameters.

   */
  public function setupcomplete($proposalId, $optParams = array())
  {
    $params = array('proposalId' => $proposalId);
    $params = array_merge($params, $optParams);
    return $this->call('setupcomplete', array($params));
  }
  /**
   *  (proposals.update)
   *
   * @param Google_Service_AdExchangeBuyer_Proposal $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_Proposal
   */
  public function update($proposalId, $revisionNumber, $updateAction, Google_Service_AdExchangeBuyer_Proposal $postBody, $optParams = array())
  {
    $params = array('proposalId' => $proposalId, 'revisionNumber' => $revisionNumber, 'updateAction' => $updateAction ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_AdExchangeBuyer_Proposal");
  }
}
