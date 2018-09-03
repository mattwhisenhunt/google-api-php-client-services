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
 * The "changes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $changes = $driveService->changes;
 *  </code>
 */
class Google_Service_Drive_Resource_Changes extends Google_Service_Resource
{
  /**
   *  (changes.getStartPageToken)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Drive_StartPageToken
   */
  public function getStartPageToken($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getStartPageToken', array($params), "Google_Service_Drive_StartPageToken");
  }
  /**
   *  (changes.listChanges)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Drive_ChangeList
   */
  public function listChanges($pageToken, $optParams = array())
  {
    $params = array('pageToken' => $pageToken);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Drive_ChangeList");
  }
  /**
   *  (changes.watch)
   *
   * @param Google_Service_Drive_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Drive_Channel
   */
  public function watch($pageToken, Google_Service_Drive_Channel $postBody, $optParams = array())
  {
    $params = array('pageToken' => $pageToken ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), "Google_Service_Drive_Channel");
  }
}
