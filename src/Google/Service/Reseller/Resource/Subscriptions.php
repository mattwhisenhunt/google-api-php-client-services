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
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $resellerService = new Google_Service_Reseller(...);
 *   $subscriptions = $resellerService->subscriptions;
 *  </code>
 */
class Google_Service_Reseller_Resource_Subscriptions extends Google_Service_Resource
{
  /**
   *  (subscriptions.activate)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Reseller_Subscription
   */
  public function activate($customerId, $subscriptionId, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId);
    $params = array_merge($params, $optParams);
    return $this->call('activate', array($params), "Google_Service_Reseller_Subscription");
  }
  /**
   *  (subscriptions.changePlan)
   *
   * @param Google_Service_Reseller_ChangePlanRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Reseller_Subscription
   */
  public function changePlan($customerId, $subscriptionId, Google_Service_Reseller_ChangePlanRequest $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('changePlan', array($params), "Google_Service_Reseller_Subscription");
  }
  /**
   *  (subscriptions.changeRenewalSettings)
   *
   * @param Google_Service_Reseller_RenewalSettings $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Reseller_Subscription
   */
  public function changeRenewalSettings($customerId, $subscriptionId, Google_Service_Reseller_RenewalSettings $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('changeRenewalSettings', array($params), "Google_Service_Reseller_Subscription");
  }
  /**
   *  (subscriptions.changeSeats)
   *
   * @param Google_Service_Reseller_Seats $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Reseller_Subscription
   */
  public function changeSeats($customerId, $subscriptionId, Google_Service_Reseller_Seats $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('changeSeats', array($params), "Google_Service_Reseller_Subscription");
  }
  /**
   *  (subscriptions.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($customerId, $subscriptionId, $deletionType, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId, 'deletionType' => $deletionType);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (subscriptions.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Reseller_Subscription
   */
  public function get($customerId, $subscriptionId, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Reseller_Subscription");
  }
  /**
   *  (subscriptions.insert)
   *
   * @param Google_Service_Reseller_Subscription $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Reseller_Subscription
   */
  public function insert($customerId, Google_Service_Reseller_Subscription $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Reseller_Subscription");
  }
  /**
   *  (subscriptions.listSubscriptions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Reseller_Subscriptions
   */
  public function listSubscriptions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Reseller_Subscriptions");
  }
  /**
   *  (subscriptions.startPaidService)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Reseller_Subscription
   */
  public function startPaidService($customerId, $subscriptionId, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId);
    $params = array_merge($params, $optParams);
    return $this->call('startPaidService', array($params), "Google_Service_Reseller_Subscription");
  }
  /**
   *  (subscriptions.suspend)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Reseller_Subscription
   */
  public function suspend($customerId, $subscriptionId, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId);
    $params = array_merge($params, $optParams);
    return $this->call('suspend', array($params), "Google_Service_Reseller_Subscription");
  }
}
