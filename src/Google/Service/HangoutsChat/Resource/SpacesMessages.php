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
 *   $chatService = new Google_Service_HangoutsChat(...);
 *   $messages = $chatService->messages;
 *  </code>
 */
class Google_Service_HangoutsChat_Resource_SpacesMessages extends Google_Service_Resource
{
  /**
   *  (messages.create)
   *
   * @param Google_Service_HangoutsChat_Message $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_HangoutsChat_Message
   */
  public function create($parent, Google_Service_HangoutsChat_Message $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_HangoutsChat_Message");
  }
  /**
   *  (messages.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_HangoutsChat_ChatEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_HangoutsChat_ChatEmpty");
  }
  /**
   *  (messages.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_HangoutsChat_Message
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_HangoutsChat_Message");
  }
  /**
   *  (messages.update)
   *
   * @param Google_Service_HangoutsChat_Message $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_HangoutsChat_Message
   */
  public function update($name, Google_Service_HangoutsChat_Message $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_HangoutsChat_Message");
  }
}
