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
 * The "activities" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusDomainsService = new Google_Service_PlusDomains(...);
 *   $activities = $plusDomainsService->activities;
 *  </code>
 */
class Google_Service_PlusDomains_Resource_Activities extends Google_Service_Resource
{
  /**
   *  (activities.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_PlusDomains_Activity
   */
  public function get($activityId, $optParams = array())
  {
    $params = array('activityId' => $activityId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_PlusDomains_Activity");
  }
  /**
   *  (activities.insert)
   *
   * @param Google_Service_PlusDomains_Activity $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_PlusDomains_Activity
   */
  public function insert($userId, Google_Service_PlusDomains_Activity $postBody, $optParams = array())
  {
    $params = array('userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_PlusDomains_Activity");
  }
  /**
   *  (activities.listActivities)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_PlusDomains_ActivityFeed
   */
  public function listActivities($userId, $collection, $optParams = array())
  {
    $params = array('userId' => $userId, 'collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_PlusDomains_ActivityFeed");
  }
}
