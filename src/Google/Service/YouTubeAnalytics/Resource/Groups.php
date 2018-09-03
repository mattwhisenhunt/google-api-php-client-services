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
 * The "groups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeAnalyticsService = new Google_Service_YouTubeAnalytics(...);
 *   $groups = $youtubeAnalyticsService->groups;
 *  </code>
 */
class Google_Service_YouTubeAnalytics_Resource_Groups extends Google_Service_Resource
{
  /**
   *  (groups.delete)
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
   *  (groups.insert)
   *
   * @param Google_Service_YouTubeAnalytics_Group $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTubeAnalytics_Group
   */
  public function insert(Google_Service_YouTubeAnalytics_Group $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTubeAnalytics_Group");
  }
  /**
   *  (groups.listGroups)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTubeAnalytics_ListGroupsResponse
   */
  public function listGroups($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubeAnalytics_ListGroupsResponse");
  }
  /**
   *  (groups.update)
   *
   * @param Google_Service_YouTubeAnalytics_Group $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTubeAnalytics_Group
   */
  public function update(Google_Service_YouTubeAnalytics_Group $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_YouTubeAnalytics_Group");
  }
}
