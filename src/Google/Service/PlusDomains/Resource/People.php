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
 * The "people" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusDomainsService = new Google_Service_PlusDomains(...);
 *   $people = $plusDomainsService->people;
 *  </code>
 */
class Google_Service_PlusDomains_Resource_People extends Google_Service_Resource
{
  /**
   *  (people.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_PlusDomains_Person
   */
  public function get($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_PlusDomains_Person");
  }
  /**
   *  (people.listPeople)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_PlusDomains_PeopleFeed
   */
  public function listPeople($userId, $collection, $optParams = array())
  {
    $params = array('userId' => $userId, 'collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_PlusDomains_PeopleFeed");
  }
  /**
   *  (people.listByActivity)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_PlusDomains_PeopleFeed
   */
  public function listByActivity($activityId, $collection, $optParams = array())
  {
    $params = array('activityId' => $activityId, 'collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('listByActivity', array($params), "Google_Service_PlusDomains_PeopleFeed");
  }
  /**
   *  (people.listByCircle)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_PlusDomains_PeopleFeed
   */
  public function listByCircle($circleId, $optParams = array())
  {
    $params = array('circleId' => $circleId);
    $params = array_merge($params, $optParams);
    return $this->call('listByCircle', array($params), "Google_Service_PlusDomains_PeopleFeed");
  }
}
