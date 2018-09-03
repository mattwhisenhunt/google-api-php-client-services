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
 * The "videos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_Service_YouTube(...);
 *   $videos = $youtubeService->videos;
 *  </code>
 */
class Google_Service_YouTube_Resource_Videos extends Google_Service_Resource
{
  /**
   *  (videos.delete)
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
   *  (videos.getRating)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTube_VideoGetRatingResponse
   */
  public function getRating($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('getRating', array($params), "Google_Service_YouTube_VideoGetRatingResponse");
  }
  /**
   *  (videos.insert)
   *
   * @param Google_Service_YouTube_Video $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTube_Video
   */
  public function insert($part, Google_Service_YouTube_Video $postBody, $optParams = array())
  {
    $params = array('part' => $part ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTube_Video");
  }
  /**
   *  (videos.listVideos)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTube_VideoListResponse
   */
  public function listVideos($part, $optParams = array())
  {
    $params = array('part' => $part);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTube_VideoListResponse");
  }
  /**
   *  (videos.rate)
   *
   * @param array $optParams Optional parameters.

   */
  public function rate($id, $rating, $optParams = array())
  {
    $params = array('id' => $id, 'rating' => $rating);
    $params = array_merge($params, $optParams);
    return $this->call('rate', array($params));
  }
  /**
   *  (videos.reportAbuse)
   *
   * @param Google_Service_YouTube_VideoAbuseReport $postBody
   * @param array $optParams Optional parameters.
   *

   */
  public function reportAbuse(Google_Service_YouTube_VideoAbuseReport $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reportAbuse', array($params));
  }
  /**
   *  (videos.update)
   *
   * @param Google_Service_YouTube_Video $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTube_Video
   */
  public function update($part, Google_Service_YouTube_Video $postBody, $optParams = array())
  {
    $params = array('part' => $part ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_YouTube_Video");
  }
}
