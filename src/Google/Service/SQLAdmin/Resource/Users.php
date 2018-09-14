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
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google_Service_SQLAdmin(...);
 *   $users = $sqladminService->users;
 *  </code>
 */
class Google_Service_SQLAdmin_Resource_Users extends Google_Service_Resource
{
  /**
   *  (users.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function delete($project, $instance, $host, $name, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'host' => $host, 'name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (users.insert)
   *
   * @param Google_Service_SQLAdmin_User $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function insert($project, $instance, Google_Service_SQLAdmin_User $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (users.listUsers)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_UsersListResponse
   */
  public function listUsers($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_SQLAdmin_UsersListResponse");
  }
  /**
   *  (users.update)
   *
   * @param Google_Service_SQLAdmin_User $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_SQLAdmin_Operation
   */
  public function update($project, $instance, $name, Google_Service_SQLAdmin_User $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_SQLAdmin_Operation");
  }
}
