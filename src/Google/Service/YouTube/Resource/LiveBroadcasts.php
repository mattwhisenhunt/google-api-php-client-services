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
 * The "liveBroadcasts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_Service_YouTube(...);
 *   $liveBroadcasts = $youtubeService->liveBroadcasts;
 *  </code>
 */
class Google_Service_YouTube_Resource_LiveBroadcasts extends Google_Service_Resource
{
  /**
   *  (liveBroadcasts.bind)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTube_LiveBroadcast
   */
  public function bind($id, $part, $optParams = array())
  {
    $params = array('id' => $id, 'part' => $part);
    $params = array_merge($params, $optParams);
    return $this->call('bind', array($params), "Google_Service_YouTube_LiveBroadcast");
  }
  /**
   *  (liveBroadcasts.control)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTube_LiveBroadcast
   */
  public function control($id, $part, $optParams = array())
  {
    $params = array('id' => $id, 'part' => $part);
    $params = array_merge($params, $optParams);
    return $this->call('control', array($params), "Google_Service_YouTube_LiveBroadcast");
  }
  /**
   *  (liveBroadcasts.delete)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (liveBroadcasts.insert)
   *
   * @param Google_Service_YouTube_LiveBroadcast $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTube_LiveBroadcast
   */
  public function insert($part, Google_Service_YouTube_LiveBroadcast $postBody, $optParams = array())
  {
    $params = array('part' => $part ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTube_LiveBroadcast");
  }
  /**
   *  (liveBroadcasts.listLiveBroadcasts)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTube_LiveBroadcastListResponse
   */
  public function listLiveBroadcasts($part, $optParams = array())
  {
    $params = array('part' => $part);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTube_LiveBroadcastListResponse");
  }
  /**
   *  (liveBroadcasts.transition)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTube_LiveBroadcast
   */
  public function transition($broadcastStatus, $id, $part, $optParams = array())
  {
    $params = array('broadcastStatus' => $broadcastStatus, 'id' => $id, 'part' => $part);
    $params = array_merge($params, $optParams);
    return $this->call('transition', array($params), "Google_Service_YouTube_LiveBroadcast");
  }
  /**
   *  (liveBroadcasts.update)
   *
   * @param Google_Service_YouTube_LiveBroadcast $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTube_LiveBroadcast
   */
  public function update($part, Google_Service_YouTube_LiveBroadcast $postBody, $optParams = array())
  {
    $params = array('part' => $part ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_YouTube_LiveBroadcast");
  }
}
