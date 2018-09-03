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
 * The "groupItems" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeAnalyticsService = new Google_Service_YouTubeAnalytics(...);
 *   $groupItems = $youtubeAnalyticsService->groupItems;
 *  </code>
 */
class Google_Service_YouTubeAnalytics_Resource_GroupItems extends Google_Service_Resource
{
  /**
   *  (groupItems.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTubeAnalytics_EmptyResponse
   */
  public function delete($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_YouTubeAnalytics_EmptyResponse");
  }
  /**
   *  (groupItems.insert)
   *
   * @param Google_Service_YouTubeAnalytics_GroupItem $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTubeAnalytics_GroupItem
   */
  public function insert(Google_Service_YouTubeAnalytics_GroupItem $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTubeAnalytics_GroupItem");
  }
  /**
   *  (groupItems.listGroupItems)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTubeAnalytics_ListGroupItemsResponse
   */
  public function listGroupItems($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubeAnalytics_ListGroupItemsResponse");
  }
}
