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
 * The "delegates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Google_Service_Gmail(...);
 *   $delegates = $gmailService->delegates;
 *  </code>
 */
class Google_Service_Gmail_Resource_UsersSettingsDelegates extends Google_Service_Resource
{
  /**
   *  (delegates.create)
   *
   * @param Google_Service_Gmail_Delegate $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_Delegate
   */
  public function create($userId, Google_Service_Gmail_Delegate $postBody, $optParams = array())
  {
    $params = array('userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Gmail_Delegate");
  }
  /**
   *  (delegates.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($userId, $delegateEmail, $optParams = array())
  {
    $params = array('userId' => $userId, 'delegateEmail' => $delegateEmail);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (delegates.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_Delegate
   */
  public function get($userId, $delegateEmail, $optParams = array())
  {
    $params = array('userId' => $userId, 'delegateEmail' => $delegateEmail);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Gmail_Delegate");
  }
  /**
   *  (delegates.listUsersSettingsDelegates)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_ListDelegatesResponse
   */
  public function listUsersSettingsDelegates($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Gmail_ListDelegatesResponse");
  }
}
