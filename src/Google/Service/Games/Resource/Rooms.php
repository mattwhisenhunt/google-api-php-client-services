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
 * The "rooms" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $rooms = $gamesService->rooms;
 *  </code>
 */
class Google_Service_Games_Resource_Rooms extends Google_Service_Resource
{
  /**
   *  (rooms.create)
   *
   * @param Google_Service_Games_RoomCreateRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_Room
   */
  public function create(Google_Service_Games_RoomCreateRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Games_Room");
  }
  /**
   *  (rooms.decline)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_Room
   */
  public function decline($roomId, $optParams = array())
  {
    $params = array('roomId' => $roomId);
    $params = array_merge($params, $optParams);
    return $this->call('decline', array($params), "Google_Service_Games_Room");
  }
  /**
   *  (rooms.dismiss)
   *
   * @param array $optParams Optional parameters.

   */
  public function dismiss($roomId, $optParams = array())
  {
    $params = array('roomId' => $roomId);
    $params = array_merge($params, $optParams);
    return $this->call('dismiss', array($params));
  }
  /**
   *  (rooms.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_Room
   */
  public function get($roomId, $optParams = array())
  {
    $params = array('roomId' => $roomId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Games_Room");
  }
  /**
   *  (rooms.join)
   *
   * @param Google_Service_Games_RoomJoinRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_Room
   */
  public function join($roomId, Google_Service_Games_RoomJoinRequest $postBody, $optParams = array())
  {
    $params = array('roomId' => $roomId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('join', array($params), "Google_Service_Games_Room");
  }
  /**
   *  (rooms.leave)
   *
   * @param Google_Service_Games_RoomLeaveRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_Room
   */
  public function leave($roomId, Google_Service_Games_RoomLeaveRequest $postBody, $optParams = array())
  {
    $params = array('roomId' => $roomId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('leave', array($params), "Google_Service_Games_Room");
  }
  /**
   *  (rooms.listRooms)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_RoomList
   */
  public function listRooms($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Games_RoomList");
  }
  /**
   *  (rooms.reportStatus)
   *
   * @param Google_Service_Games_RoomP2PStatuses $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_RoomStatus
   */
  public function reportStatus($roomId, Google_Service_Games_RoomP2PStatuses $postBody, $optParams = array())
  {
    $params = array('roomId' => $roomId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reportStatus', array($params), "Google_Service_Games_RoomStatus");
  }
}
