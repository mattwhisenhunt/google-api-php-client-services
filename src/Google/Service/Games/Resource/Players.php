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
 * The "players" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $players = $gamesService->players;
 *  </code>
 */
class Google_Service_Games_Resource_Players extends Google_Service_Resource
{
  /**
   *  (players.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_Player
   */
  public function get($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Games_Player");
  }
  /**
   *  (players.listPlayers)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_PlayerListResponse
   */
  public function listPlayers($collection, $optParams = array())
  {
    $params = array('collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Games_PlayerListResponse");
  }
}
