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
 * The "scores" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $scores = $gamesService->scores;
 *  </code>
 */
class Google_Service_Games_Resource_Scores extends Google_Service_Resource
{
  /**
   *  (scores.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_PlayerLeaderboardScoreListResponse
   */
  public function get($playerId, $leaderboardId, $timeSpan, $optParams = array())
  {
    $params = array('playerId' => $playerId, 'leaderboardId' => $leaderboardId, 'timeSpan' => $timeSpan);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Games_PlayerLeaderboardScoreListResponse");
  }
  /**
   *  (scores.listScores)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_LeaderboardScores
   */
  public function listScores($leaderboardId, $collection, $timeSpan, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId, 'collection' => $collection, 'timeSpan' => $timeSpan);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Games_LeaderboardScores");
  }
  /**
   *  (scores.listWindow)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_LeaderboardScores
   */
  public function listWindow($leaderboardId, $collection, $timeSpan, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId, 'collection' => $collection, 'timeSpan' => $timeSpan);
    $params = array_merge($params, $optParams);
    return $this->call('listWindow', array($params), "Google_Service_Games_LeaderboardScores");
  }
  /**
   *  (scores.submit)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_PlayerScoreResponse
   */
  public function submit($leaderboardId, $score, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId, 'score' => $score);
    $params = array_merge($params, $optParams);
    return $this->call('submit', array($params), "Google_Service_Games_PlayerScoreResponse");
  }
  /**
   *  (scores.submitMultiple)
   *
   * @param Google_Service_Games_PlayerScoreSubmissionList $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_PlayerScoreListResponse
   */
  public function submitMultiple(Google_Service_Games_PlayerScoreSubmissionList $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('submitMultiple', array($params), "Google_Service_Games_PlayerScoreListResponse");
  }
}
