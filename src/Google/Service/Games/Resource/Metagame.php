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
 * The "metagame" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $metagame = $gamesService->metagame;
 *  </code>
 */
class Google_Service_Games_Resource_Metagame extends Google_Service_Resource
{
  /**
   *  (metagame.getMetagameConfig)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Games_MetagameConfig
   */
  public function getMetagameConfig($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getMetagameConfig', array($params), "Google_Service_Games_MetagameConfig");
  }
  /**
   *  (metagame.listCategoriesByPlayer)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_CategoryListResponse
   */
  public function listCategoriesByPlayer($playerId, $collection, $optParams = array())
  {
    $params = array('playerId' => $playerId, 'collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('listCategoriesByPlayer', array($params), "Google_Service_Games_CategoryListResponse");
  }
}
