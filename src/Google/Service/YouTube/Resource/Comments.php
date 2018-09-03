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
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_Service_YouTube(...);
 *   $comments = $youtubeService->comments;
 *  </code>
 */
class Google_Service_YouTube_Resource_Comments extends Google_Service_Resource
{
  /**
   *  (comments.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (comments.insert)
   *
   * @param Google_Service_YouTube_Comment $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_YouTube_Comment
   */
  public function insert($part, Google_Service_YouTube_Comment $postBody, $optParams = array())
  {
    $params = array('part' => $part ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTube_Comment");
  }
  /**
   *  (comments.listComments)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_YouTube_CommentListResponse
   */
  public function listComments($part, $optParams = array())
  {
    $params = array('part' => $part);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTube_CommentListResponse");
  }
  /**
   *  (comments.markAsSpam)
   *
   * @param array $optParams Optional parameters.

   */
  public function markAsSpam($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('markAsSpam', array($params));
  }
  /**
   *  (comments.setModerationStatus)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function setModerationStatus($id, $moderationStatus, $optParams = array())
  {
    $params = array('id' => $id, 'moderationStatus' => $moderationStatus);
    $params = array_merge($params, $optParams);
    return $this->call('setModerationStatus', array($params));
  }
  /**
   *  (comments.update)
   *
   * @param Google_Service_YouTube_Comment $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_YouTube_Comment
   */
  public function update($part, Google_Service_YouTube_Comment $postBody, $optParams = array())
  {
    $params = array('part' => $part ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_YouTube_Comment");
  }
}
