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
 * The "sessions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fitnessService = new Google_Service_Fitness(...);
 *   $sessions = $fitnessService->sessions;
 *  </code>
 */
class Google_Service_Fitness_Resource_UsersSessions extends Google_Service_Resource
{
  /**
   *  (sessions.delete)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function delete($userId, $sessionId, $optParams = array())
  {
    $params = array('userId' => $userId, 'sessionId' => $sessionId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (sessions.listUsersSessions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Fitness_ListSessionsResponse
   */
  public function listUsersSessions($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Fitness_ListSessionsResponse");
  }
  /**
   *  (sessions.update)
   *
   * @param Google_Service_Fitness_Session $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Fitness_Session
   */
  public function update($userId, $sessionId, Google_Service_Fitness_Session $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'sessionId' => $sessionId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Fitness_Session");
  }
}
