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
 * The "circles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusDomainsService = new Google_Service_PlusDomains(...);
 *   $circles = $plusDomainsService->circles;
 *  </code>
 */
class Google_Service_PlusDomains_Resource_Circles extends Google_Service_Resource
{
  /**
   *  (circles.addPeople)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_PlusDomains_Circle
   */
  public function addPeople($circleId, $optParams = array())
  {
    $params = array('circleId' => $circleId);
    $params = array_merge($params, $optParams);
    return $this->call('addPeople', array($params), "Google_Service_PlusDomains_Circle");
  }
  /**
   *  (circles.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_PlusDomains_Circle
   */
  public function get($circleId, $optParams = array())
  {
    $params = array('circleId' => $circleId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_PlusDomains_Circle");
  }
  /**
   *  (circles.insert)
   *
   * @param Google_Service_PlusDomains_Circle $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_PlusDomains_Circle
   */
  public function insert($userId, Google_Service_PlusDomains_Circle $postBody, $optParams = array())
  {
    $params = array('userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_PlusDomains_Circle");
  }
  /**
   *  (circles.listCircles)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_PlusDomains_CircleFeed
   */
  public function listCircles($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_PlusDomains_CircleFeed");
  }
  /**
   *  (circles.patch)
   *
   * @param Google_Service_PlusDomains_Circle $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_PlusDomains_Circle
   */
  public function patch($circleId, Google_Service_PlusDomains_Circle $postBody, $optParams = array())
  {
    $params = array('circleId' => $circleId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_PlusDomains_Circle");
  }
  /**
   *  (circles.remove)
   *
   * @param array $optParams Optional parameters.

   */
  public function remove($circleId, $optParams = array())
  {
    $params = array('circleId' => $circleId);
    $params = array_merge($params, $optParams);
    return $this->call('remove', array($params));
  }
  /**
   *  (circles.removePeople)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function removePeople($circleId, $optParams = array())
  {
    $params = array('circleId' => $circleId);
    $params = array_merge($params, $optParams);
    return $this->call('removePeople', array($params));
  }
  /**
   *  (circles.update)
   *
   * @param Google_Service_PlusDomains_Circle $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_PlusDomains_Circle
   */
  public function update($circleId, Google_Service_PlusDomains_Circle $postBody, $optParams = array())
  {
    $params = array('circleId' => $circleId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_PlusDomains_Circle");
  }
}
