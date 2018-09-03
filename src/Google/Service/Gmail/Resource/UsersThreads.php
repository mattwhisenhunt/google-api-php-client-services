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
 * The "threads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Google_Service_Gmail(...);
 *   $threads = $gmailService->threads;
 *  </code>
 */
class Google_Service_Gmail_Resource_UsersThreads extends Google_Service_Resource
{
  /**
   *  (threads.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (threads.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Gmail_Thread
   */
  public function get($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Gmail_Thread");
  }
  /**
   *  (threads.listUsersThreads)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Gmail_ListThreadsResponse
   */
  public function listUsersThreads($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Gmail_ListThreadsResponse");
  }
  /**
   *  (threads.modify)
   *
   * @param Google_Service_Gmail_ModifyThreadRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_Thread
   */
  public function modify($userId, $id, Google_Service_Gmail_ModifyThreadRequest $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('modify', array($params), "Google_Service_Gmail_Thread");
  }
  /**
   *  (threads.trash)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_Thread
   */
  public function trash($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('trash', array($params), "Google_Service_Gmail_Thread");
  }
  /**
   *  (threads.untrash)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_Thread
   */
  public function untrash($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('untrash', array($params), "Google_Service_Gmail_Thread");
  }
}
