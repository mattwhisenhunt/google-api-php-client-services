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
 * The "databases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google_Service_SQLAdmin(...);
 *   $databases = $sqladminService->databases;
 *  </code>
 */
class Google_Service_SQLAdmin_Resource_Databases extends Google_Service_Resource
{
  /**
   *  (databases.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function delete($project, $instance, $database, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'database' => $database);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (databases.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Database
   */
  public function get($project, $instance, $database, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'database' => $database);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_SQLAdmin_Database");
  }
  /**
   *  (databases.insert)
   *
   * @param Google_Service_SQLAdmin_Database $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function insert($project, $instance, Google_Service_SQLAdmin_Database $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (databases.listDatabases)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_DatabasesListResponse
   */
  public function listDatabases($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_SQLAdmin_DatabasesListResponse");
  }
  /**
   *  (databases.patch)
   *
   * @param Google_Service_SQLAdmin_Database $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function patch($project, $instance, $database, Google_Service_SQLAdmin_Database $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'database' => $database ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (databases.update)
   *
   * @param Google_Service_SQLAdmin_Database $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function update($project, $instance, $database, Google_Service_SQLAdmin_Database $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'database' => $database ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_SQLAdmin_Operation");
  }
}
