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
 * The "queues" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudtasksService = new Google_Service_CloudTasks(...);
 *   $queues = $cloudtasksService->queues;
 *  </code>
 */
class Google_Service_CloudTasks_Resource_ProjectsLocationsQueues extends Google_Service_Resource
{
  /**
   *  (queues.create)
   *
   * @param Google_Service_CloudTasks_Queue $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTasks_Queue
   */
  public function create($parent, Google_Service_CloudTasks_Queue $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudTasks_Queue");
  }
  /**
   *  (queues.delete)
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
   *  (queues.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTasks_Queue
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudTasks_Queue");
  }
  /**
   *  (queues.getIamPolicy)
   *
   * @param Google_Service_CloudTasks_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTasks_Policy
   */
  public function getIamPolicy($resource, Google_Service_CloudTasks_GetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_CloudTasks_Policy");
  }
  /**
   *  (queues.listProjectsLocationsQueues)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudTasks_ListQueuesResponse
   */
  public function listProjectsLocationsQueues($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudTasks_ListQueuesResponse");
  }
  /**
   *  (queues.patch)
   *
   * @param Google_Service_CloudTasks_Queue $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudTasks_Queue
   */
  public function patch($name, Google_Service_CloudTasks_Queue $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudTasks_Queue");
  }
  /**
   *  (queues.pause)
   *
   * @param Google_Service_CloudTasks_PauseQueueRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTasks_Queue
   */
  public function pause($name, Google_Service_CloudTasks_PauseQueueRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('pause', array($params), "Google_Service_CloudTasks_Queue");
  }
  /**
   *  (queues.purge)
   *
   * @param Google_Service_CloudTasks_PurgeQueueRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTasks_Queue
   */
  public function purge($name, Google_Service_CloudTasks_PurgeQueueRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('purge', array($params), "Google_Service_CloudTasks_Queue");
  }
  /**
   *  (queues.resume)
   *
   * @param Google_Service_CloudTasks_ResumeQueueRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTasks_Queue
   */
  public function resume($name, Google_Service_CloudTasks_ResumeQueueRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('resume', array($params), "Google_Service_CloudTasks_Queue");
  }
  /**
   *  (queues.setIamPolicy)
   *
   * @param Google_Service_CloudTasks_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTasks_Policy
   */
  public function setIamPolicy($resource, Google_Service_CloudTasks_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_CloudTasks_Policy");
  }
  /**
   *  (queues.testIamPermissions)
   *
   * @param Google_Service_CloudTasks_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudTasks_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_CloudTasks_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_CloudTasks_TestIamPermissionsResponse");
  }
}
