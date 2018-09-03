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
 *   $youtubeService = new Google_Service_YouTube(...);
 *   $subscriptions = $youtubeService->subscriptions;
 *  </code>
 */
class Google_Service_YouTube_Resource_Subscriptions extends Google_Service_Resource
{
  /**
   *  (subscriptions.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (subscriptions.insert)
   *
   * @param Google_Service_YouTube_Subscription $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_YouTube_Subscription
   */
  public function insert($part, Google_Service_YouTube_Subscription $postBody, $optParams = array())
  {
    $params = array('part' => $part ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTube_Subscription");
  }
  /**
   *  (subscriptions.listSubscriptions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTube_SubscriptionListResponse
   */
  public function listSubscriptions($part, $optParams = array())
  {
    $params = array('part' => $part);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTube_SubscriptionListResponse");
  }
}
