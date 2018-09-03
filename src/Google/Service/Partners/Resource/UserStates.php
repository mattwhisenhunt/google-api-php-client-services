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
 * The "userStates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $partnersService = new Google_Service_Partners(...);
 *   $userStates = $partnersService->userStates;
 *  </code>
 */
class Google_Service_Partners_Resource_UserStates extends Google_Service_Resource
{
  /**
   *  (userStates.listUserStates)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Partners_ListUserStatesResponse
   */
  public function listUserStates($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Partners_ListUserStatesResponse");
  }
}
