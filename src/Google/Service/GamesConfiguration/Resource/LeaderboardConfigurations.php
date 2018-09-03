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
 * The "leaderboardConfigurations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesConfigurationService = new Google_Service_GamesConfiguration(...);
 *   $leaderboardConfigurations = $gamesConfigurationService->leaderboardConfigurations;
 *  </code>
 */
class Google_Service_GamesConfiguration_Resource_LeaderboardConfigurations extends Google_Service_Resource
{
  /**
   *  (leaderboardConfigurations.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($leaderboardId, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (leaderboardConfigurations.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_GamesConfiguration_LeaderboardConfiguration
   */
  public function get($leaderboardId, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_GamesConfiguration_LeaderboardConfiguration");
  }
  /**
   *  (leaderboardConfigurations.insert)
   *
   * @param Google_Service_GamesConfiguration_LeaderboardConfiguration $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_GamesConfiguration_LeaderboardConfiguration
   */
  public function insert($applicationId, Google_Service_GamesConfiguration_LeaderboardConfiguration $postBody, $optParams = array())
  {
    $params = array('applicationId' => $applicationId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_GamesConfiguration_LeaderboardConfiguration");
  }
  /**
   *  (leaderboardConfigurations.listLeaderboardConfigurations)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_GamesConfiguration_LeaderboardConfigurationListResponse
   */
  public function listLeaderboardConfigurations($applicationId, $optParams = array())
  {
    $params = array('applicationId' => $applicationId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_GamesConfiguration_LeaderboardConfigurationListResponse");
  }
  /**
   *  (leaderboardConfigurations.patch)
   *
   * @param Google_Service_GamesConfiguration_LeaderboardConfiguration $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_GamesConfiguration_LeaderboardConfiguration
   */
  public function patch($leaderboardId, Google_Service_GamesConfiguration_LeaderboardConfiguration $postBody, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_GamesConfiguration_LeaderboardConfiguration");
  }
  /**
   *  (leaderboardConfigurations.update)
   *
   * @param Google_Service_GamesConfiguration_LeaderboardConfiguration $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_GamesConfiguration_LeaderboardConfiguration
   */
  public function update($leaderboardId, Google_Service_GamesConfiguration_LeaderboardConfiguration $postBody, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_GamesConfiguration_LeaderboardConfiguration");
  }
}
