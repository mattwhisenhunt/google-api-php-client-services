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
 * The "ads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_Service_Dfareporting(...);
 *   $ads = $dfareportingService->ads;
 *  </code>
 */
class Google_Service_Dfareporting_Resource_Ads extends Google_Service_Resource
{
  /**
   *  (ads.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_Ad
   */
  public function get($profileId, $id, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Dfareporting_Ad");
  }
  /**
   *  (ads.insert)
   *
   * @param Google_Service_Dfareporting_Ad $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_Ad
   */
  public function insert($profileId, Google_Service_Dfareporting_Ad $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Dfareporting_Ad");
  }
  /**
   *  (ads.listAds)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dfareporting_AdsListResponse
   */
  public function listAds($profileId, $optParams = array())
  {
    $params = array('profileId' => $profileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dfareporting_AdsListResponse");
  }
  /**
   *  (ads.patch)
   *
   * @param Google_Service_Dfareporting_Ad $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_Ad
   */
  public function patch($profileId, $id, Google_Service_Dfareporting_Ad $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Dfareporting_Ad");
  }
  /**
   *  (ads.update)
   *
   * @param Google_Service_Dfareporting_Ad $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_Ad
   */
  public function update($profileId, Google_Service_Dfareporting_Ad $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Dfareporting_Ad");
  }
}
