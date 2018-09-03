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
 * The "drafts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Google_Service_Gmail(...);
 *   $drafts = $gmailService->drafts;
 *  </code>
 */
class Google_Service_Gmail_Resource_UsersDrafts extends Google_Service_Resource
{
  /**
   *  (drafts.create)
   *
   * @param Google_Service_Gmail_Draft $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_Draft
   */
  public function create($userId, Google_Service_Gmail_Draft $postBody, $optParams = array())
  {
    $params = array('userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Gmail_Draft");
  }
  /**
   *  (drafts.delete)
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
   *  (drafts.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Gmail_Draft
   */
  public function get($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Gmail_Draft");
  }
  /**
   *  (drafts.listUsersDrafts)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Gmail_ListDraftsResponse
   */
  public function listUsersDrafts($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Gmail_ListDraftsResponse");
  }
  /**
   *  (drafts.send)
   *
   * @param Google_Service_Gmail_Draft $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_Message
   */
  public function send($userId, Google_Service_Gmail_Draft $postBody, $optParams = array())
  {
    $params = array('userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('send', array($params), "Google_Service_Gmail_Message");
  }
  /**
   *  (drafts.update)
   *
   * @param Google_Service_Gmail_Draft $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_Draft
   */
  public function update($userId, $id, Google_Service_Gmail_Draft $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Gmail_Draft");
  }
}
