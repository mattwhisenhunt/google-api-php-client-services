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
 * The "events" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $events = $gamesService->events;
 *  </code>
 */
class Google_Service_Games_Resource_Events extends Google_Service_Resource
{
  /**
   *  (events.listByPlayer)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_PlayerEventListResponse
   */
  public function listByPlayer($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('listByPlayer', array($params), "Google_Service_Games_PlayerEventListResponse");
  }
  /**
   *  (events.listDefinitions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_EventDefinitionListResponse
   */
  public function listDefinitions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('listDefinitions', array($params), "Google_Service_Games_EventDefinitionListResponse");
  }
  /**
   *  (events.record)
   *
   * @param Google_Service_Games_EventRecordRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_EventUpdateResponse
   */
  public function record(Google_Service_Games_EventRecordRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('record', array($params), "Google_Service_Games_EventUpdateResponse");
  }
}
