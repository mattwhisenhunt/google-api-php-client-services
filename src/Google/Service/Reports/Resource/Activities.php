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
 * The "activities" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Reports(...);
 *   $activities = $adminService->activities;
 *  </code>
 */
class Google_Service_Reports_Resource_Activities extends Google_Service_Resource
{
  /**
   *  (activities.listActivities)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Reports_Activities
   */
  public function listActivities($userKey, $applicationName, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'applicationName' => $applicationName);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Reports_Activities");
  }
  /**
   *  (activities.watch)
   *
   * @param Google_Service_Reports_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Reports_Channel
   */
  public function watch($userKey, $applicationName, Google_Service_Reports_Channel $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'applicationName' => $applicationName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), "Google_Service_Reports_Channel");
  }
}
