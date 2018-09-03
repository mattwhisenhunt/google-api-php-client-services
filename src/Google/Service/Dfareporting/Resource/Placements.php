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
 * The "placements" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_Service_Dfareporting(...);
 *   $placements = $dfareportingService->placements;
 *  </code>
 */
class Google_Service_Dfareporting_Resource_Placements extends Google_Service_Resource
{
  /**
   *  (placements.generatetags)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dfareporting_PlacementsGenerateTagsResponse
   */
  public function generatetags($profileId, $optParams = array())
  {
    $params = array('profileId' => $profileId);
    $params = array_merge($params, $optParams);
    return $this->call('generatetags', array($params), "Google_Service_Dfareporting_PlacementsGenerateTagsResponse");
  }
  /**
   *  (placements.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_Placement
   */
  public function get($profileId, $id, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Dfareporting_Placement");
  }
  /**
   *  (placements.insert)
   *
   * @param Google_Service_Dfareporting_Placement $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_Placement
   */
  public function insert($profileId, Google_Service_Dfareporting_Placement $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Dfareporting_Placement");
  }
  /**
   *  (placements.listPlacements)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dfareporting_PlacementsListResponse
   */
  public function listPlacements($profileId, $optParams = array())
  {
    $params = array('profileId' => $profileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dfareporting_PlacementsListResponse");
  }
  /**
   *  (placements.patch)
   *
   * @param Google_Service_Dfareporting_Placement $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_Placement
   */
  public function patch($profileId, $id, Google_Service_Dfareporting_Placement $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Dfareporting_Placement");
  }
  /**
   *  (placements.update)
   *
   * @param Google_Service_Dfareporting_Placement $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_Placement
   */
  public function update($profileId, Google_Service_Dfareporting_Placement $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Dfareporting_Placement");
  }
}
