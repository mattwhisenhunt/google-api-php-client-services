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
 * The "messages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Google_Service_Gmail(...);
 *   $messages = $gmailService->messages;
 *  </code>
 */
class Google_Service_Gmail_Resource_UsersMessages extends Google_Service_Resource
{
  /**
   *  (messages.batchDelete)
   *
   * @param Google_Service_Gmail_BatchDeleteMessagesRequest $postBody
   * @param array $optParams Optional parameters.

   */
  public function batchDelete($userId, Google_Service_Gmail_BatchDeleteMessagesRequest $postBody, $optParams = array())
  {
    $params = array('userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', array($params));
  }
  /**
   *  (messages.batchModify)
   *
   * @param Google_Service_Gmail_BatchModifyMessagesRequest $postBody
   * @param array $optParams Optional parameters.

   */
  public function batchModify($userId, Google_Service_Gmail_BatchModifyMessagesRequest $postBody, $optParams = array())
  {
    $params = array('userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchModify', array($params));
  }
  /**
   *  (messages.delete)
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
   *  (messages.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Gmail_Message
   */
  public function get($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Gmail_Message");
  }
  /**
   *  (messages.import)
   *
   * @param Google_Service_Gmail_Message $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Gmail_Message
   */
  public function import($userId, Google_Service_Gmail_Message $postBody, $optParams = array())
  {
    $params = array('userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('import', array($params), "Google_Service_Gmail_Message");
  }
  /**
   *  (messages.insert)
   *
   * @param Google_Service_Gmail_Message $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Gmail_Message
   */
  public function insert($userId, Google_Service_Gmail_Message $postBody, $optParams = array())
  {
    $params = array('userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Gmail_Message");
  }
  /**
   *  (messages.listUsersMessages)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Gmail_ListMessagesResponse
   */
  public function listUsersMessages($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Gmail_ListMessagesResponse");
  }
  /**
   *  (messages.modify)
   *
   * @param Google_Service_Gmail_ModifyMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_Message
   */
  public function modify($userId, $id, Google_Service_Gmail_ModifyMessageRequest $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('modify', array($params), "Google_Service_Gmail_Message");
  }
  /**
   *  (messages.send)
   *
   * @param Google_Service_Gmail_Message $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_Message
   */
  public function send($userId, Google_Service_Gmail_Message $postBody, $optParams = array())
  {
    $params = array('userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('send', array($params), "Google_Service_Gmail_Message");
  }
  /**
   *  (messages.trash)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_Message
   */
  public function trash($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('trash', array($params), "Google_Service_Gmail_Message");
  }
  /**
   *  (messages.untrash)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_Message
   */
  public function untrash($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('untrash', array($params), "Google_Service_Gmail_Message");
  }
}
