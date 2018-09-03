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
 * The "snapshots" collection of methods.
 * Typical usage is:
 *  <code>
 *   $pubsubService = new Google_Service_Pubsub(...);
 *   $snapshots = $pubsubService->snapshots;
 *  </code>
 */
class Google_Service_Pubsub_Resource_ProjectsSnapshots extends Google_Service_Resource
{
  /**
   *  (snapshots.create)
   *
   * @param Google_Service_Pubsub_CreateSnapshotRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_Snapshot
   */
  public function create($name, Google_Service_Pubsub_CreateSnapshotRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Pubsub_Snapshot");
  }
  /**
   *  (snapshots.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_PubsubEmpty
   */
  public function delete($snapshot, $optParams = array())
  {
    $params = array('snapshot' => $snapshot);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Pubsub_PubsubEmpty");
  }
  /**
   *  (snapshots.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_Snapshot
   */
  public function get($snapshot, $optParams = array())
  {
    $params = array('snapshot' => $snapshot);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Pubsub_Snapshot");
  }
  /**
   *  (snapshots.getIamPolicy)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_Policy
   */
  public function getIamPolicy($resource, $optParams = array())
  {
    $params = array('resource' => $resource);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_Pubsub_Policy");
  }
  /**
   *  (snapshots.listProjectsSnapshots)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Pubsub_ListSnapshotsResponse
   */
  public function listProjectsSnapshots($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Pubsub_ListSnapshotsResponse");
  }
  /**
   *  (snapshots.patch)
   *
   * @param Google_Service_Pubsub_UpdateSnapshotRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_Snapshot
   */
  public function patch($name, Google_Service_Pubsub_UpdateSnapshotRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Pubsub_Snapshot");
  }
  /**
   *  (snapshots.setIamPolicy)
   *
   * @param Google_Service_Pubsub_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_Policy
   */
  public function setIamPolicy($resource, Google_Service_Pubsub_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_Pubsub_Policy");
  }
  /**
   *  (snapshots.testIamPermissions)
   *
   * @param Google_Service_Pubsub_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_Pubsub_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_Pubsub_TestIamPermissionsResponse");
  }
}
