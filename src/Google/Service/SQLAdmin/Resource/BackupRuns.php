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
 * The "backupRuns" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google_Service_SQLAdmin(...);
 *   $backupRuns = $sqladminService->backupRuns;
 *  </code>
 */
class Google_Service_SQLAdmin_Resource_BackupRuns extends Google_Service_Resource
{
  /**
   *  (backupRuns.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function delete($project, $instance, $id, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (backupRuns.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_BackupRun
   */
  public function get($project, $instance, $id, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_SQLAdmin_BackupRun");
  }
  /**
   *  (backupRuns.insert)
   *
   * @param Google_Service_SQLAdmin_BackupRun $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function insert($project, $instance, Google_Service_SQLAdmin_BackupRun $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (backupRuns.listBackupRuns)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_SQLAdmin_BackupRunsListResponse
   */
  public function listBackupRuns($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_SQLAdmin_BackupRunsListResponse");
  }
}
