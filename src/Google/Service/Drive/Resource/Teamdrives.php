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
 * The "teamdrives" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $teamdrives = $driveService->teamdrives;
 *  </code>
 */
class Google_Service_Drive_Resource_Teamdrives extends Google_Service_Resource
{
  /**
   *  (teamdrives.create)
   *
   * @param Google_Service_Drive_TeamDrive $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Drive_TeamDrive
   */
  public function create($requestId, Google_Service_Drive_TeamDrive $postBody, $optParams = array())
  {
    $params = array('requestId' => $requestId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Drive_TeamDrive");
  }
  /**
   *  (teamdrives.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($teamDriveId, $optParams = array())
  {
    $params = array('teamDriveId' => $teamDriveId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (teamdrives.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Drive_TeamDrive
   */
  public function get($teamDriveId, $optParams = array())
  {
    $params = array('teamDriveId' => $teamDriveId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Drive_TeamDrive");
  }
  /**
   *  (teamdrives.listTeamdrives)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Drive_TeamDriveList
   */
  public function listTeamdrives($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Drive_TeamDriveList");
  }
  /**
   *  (teamdrives.update)
   *
   * @param Google_Service_Drive_TeamDrive $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Drive_TeamDrive
   */
  public function update($teamDriveId, Google_Service_Drive_TeamDrive $postBody, $optParams = array())
  {
    $params = array('teamDriveId' => $teamDriveId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Drive_TeamDrive");
  }
}
