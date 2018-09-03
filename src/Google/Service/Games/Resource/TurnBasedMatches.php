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
 * The "turnBasedMatches" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $turnBasedMatches = $gamesService->turnBasedMatches;
 *  </code>
 */
class Google_Service_Games_Resource_TurnBasedMatches extends Google_Service_Resource
{
  /**
   *  (turnBasedMatches.cancel)
   *
   * @param array $optParams Optional parameters.

   */
  public function cancel($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params));
  }
  /**
   *  (turnBasedMatches.create)
   *
   * @param Google_Service_Games_TurnBasedMatchCreateRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function create(Google_Service_Games_TurnBasedMatchCreateRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Games_TurnBasedMatch");
  }
  /**
   *  (turnBasedMatches.decline)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function decline($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('decline', array($params), "Google_Service_Games_TurnBasedMatch");
  }
  /**
   *  (turnBasedMatches.dismiss)
   *
   * @param array $optParams Optional parameters.

   */
  public function dismiss($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('dismiss', array($params));
  }
  /**
   *  (turnBasedMatches.finish)
   *
   * @param Google_Service_Games_TurnBasedMatchResults $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function finish($matchId, Google_Service_Games_TurnBasedMatchResults $postBody, $optParams = array())
  {
    $params = array('matchId' => $matchId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('finish', array($params), "Google_Service_Games_TurnBasedMatch");
  }
  /**
   *  (turnBasedMatches.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function get($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Games_TurnBasedMatch");
  }
  /**
   *  (turnBasedMatches.join)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function join($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('join', array($params), "Google_Service_Games_TurnBasedMatch");
  }
  /**
   *  (turnBasedMatches.leave)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function leave($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('leave', array($params), "Google_Service_Games_TurnBasedMatch");
  }
  /**
   *  (turnBasedMatches.leaveTurn)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function leaveTurn($matchId, $matchVersion, $optParams = array())
  {
    $params = array('matchId' => $matchId, 'matchVersion' => $matchVersion);
    $params = array_merge($params, $optParams);
    return $this->call('leaveTurn', array($params), "Google_Service_Games_TurnBasedMatch");
  }
  /**
   *  (turnBasedMatches.listTurnBasedMatches)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_TurnBasedMatchList
   */
  public function listTurnBasedMatches($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Games_TurnBasedMatchList");
  }
  /**
   *  (turnBasedMatches.rematch)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_TurnBasedMatchRematch
   */
  public function rematch($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('rematch', array($params), "Google_Service_Games_TurnBasedMatchRematch");
  }
  /**
   *  (turnBasedMatches.sync)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_TurnBasedMatchSync
   */
  public function sync($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('sync', array($params), "Google_Service_Games_TurnBasedMatchSync");
  }
  /**
   *  (turnBasedMatches.takeTurn)
   *
   * @param Google_Service_Games_TurnBasedMatchTurn $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_TurnBasedMatch
   */
  public function takeTurn($matchId, Google_Service_Games_TurnBasedMatchTurn $postBody, $optParams = array())
  {
    $params = array('matchId' => $matchId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('takeTurn', array($params), "Google_Service_Games_TurnBasedMatch");
  }
}
