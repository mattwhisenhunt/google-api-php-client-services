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
 * The "tasklists" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tasksService = new Google_Service_Tasks(...);
 *   $tasklists = $tasksService->tasklists;
 *  </code>
 */
class Google_Service_Tasks_Resource_Tasklists extends Google_Service_Resource
{
  /**
   *  (tasklists.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($tasklist, $optParams = array())
  {
    $params = array('tasklist' => $tasklist);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (tasklists.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Tasks_TaskList
   */
  public function get($tasklist, $optParams = array())
  {
    $params = array('tasklist' => $tasklist);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Tasks_TaskList");
  }
  /**
   *  (tasklists.insert)
   *
   * @param Google_Service_Tasks_TaskList $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Tasks_TaskList
   */
  public function insert(Google_Service_Tasks_TaskList $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Tasks_TaskList");
  }
  /**
   *  (tasklists.listTasklists)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Tasks_TaskLists
   */
  public function listTasklists($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Tasks_TaskLists");
  }
  /**
   *  (tasklists.patch)
   *
   * @param Google_Service_Tasks_TaskList $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Tasks_TaskList
   */
  public function patch($tasklist, Google_Service_Tasks_TaskList $postBody, $optParams = array())
  {
    $params = array('tasklist' => $tasklist ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Tasks_TaskList");
  }
  /**
   *  (tasklists.update)
   *
   * @param Google_Service_Tasks_TaskList $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Tasks_TaskList
   */
  public function update($tasklist, Google_Service_Tasks_TaskList $postBody, $optParams = array())
  {
    $params = array('tasklist' => $tasklist ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Tasks_TaskList");
  }
}
