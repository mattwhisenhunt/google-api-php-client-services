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
 *   $computeService = new Google_Service_Compute(...);
 *   $snapshots = $computeService->snapshots;
 *  </code>
 */
class Google_Service_Compute_Resource_Snapshots extends Google_Service_Resource
{
  /**
   *  (snapshots.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $snapshot, $optParams = array())
  {
    $params = array('project' => $project, 'snapshot' => $snapshot);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (snapshots.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Snapshot
   */
  public function get($project, $snapshot, $optParams = array())
  {
    $params = array('project' => $project, 'snapshot' => $snapshot);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_Snapshot");
  }
  /**
   *  (snapshots.listSnapshots)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_SnapshotList
   */
  public function listSnapshots($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_SnapshotList");
  }
  /**
   *  (snapshots.setLabels)
   *
   * @param Google_Service_Compute_GlobalSetLabelsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Operation
   */
  public function setLabels($project, $resource, Google_Service_Compute_GlobalSetLabelsRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setLabels', array($params), "Google_Service_Compute_Operation");
  }
}
