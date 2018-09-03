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
 * The "tasks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudtasksService = new Google_Service_CloudTasks(...);
 *   $tasks = $cloudtasksService->tasks;
 *  </code>
 */
class Google_Service_CloudTasks_Resource_ProjectsLocationsQueuesTasks extends Google_Service_Resource
{
  /**
   *  (tasks.create)
   *
   * @param Google_Service_CloudTasks_CreateTaskRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTasks_Task
   */
  public function create($parent, Google_Service_CloudTasks_CreateTaskRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudTasks_Task");
  }
  /**
   *  (tasks.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTasks_CloudtasksEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_CloudTasks_CloudtasksEmpty");
  }
  /**
   *  (tasks.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudTasks_Task
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudTasks_Task");
  }
  /**
   *  (tasks.listProjectsLocationsQueuesTasks)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudTasks_ListTasksResponse
   */
  public function listProjectsLocationsQueuesTasks($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudTasks_ListTasksResponse");
  }
  /**
   *  (tasks.run)
   *
   * @param Google_Service_CloudTasks_RunTaskRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTasks_Task
   */
  public function run($name, Google_Service_CloudTasks_RunTaskRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('run', array($params), "Google_Service_CloudTasks_Task");
  }
}
