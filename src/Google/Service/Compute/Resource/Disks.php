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
 * The "disks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $disks = $computeService->disks;
 *  </code>
 */
class Google_Service_Compute_Resource_Disks extends Google_Service_Resource
{
  /**
   *  (disks.aggregatedList)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_DiskAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), "Google_Service_Compute_DiskAggregatedList");
  }
  /**
   *  (disks.createSnapshot)
   *
   * @param Google_Service_Compute_Snapshot $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function createSnapshot($project, $zone, $disk, Google_Service_Compute_Snapshot $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createSnapshot', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (disks.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $zone, $disk, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (disks.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Disk
   */
  public function get($project, $zone, $disk, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_Disk");
  }
  /**
   *  (disks.insert)
   *
   * @param Google_Service_Compute_Disk $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, $zone, Google_Service_Compute_Disk $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (disks.listDisks)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_DiskList
   */
  public function listDisks($project, $zone, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_DiskList");
  }
  /**
   *  (disks.resize)
   *
   * @param Google_Service_Compute_DisksResizeRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function resize($project, $zone, $disk, Google_Service_Compute_DisksResizeRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('resize', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (disks.setLabels)
   *
   * @param Google_Service_Compute_ZoneSetLabelsRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setLabels($project, $zone, $resource, Google_Service_Compute_ZoneSetLabelsRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setLabels', array($params), "Google_Service_Compute_Operation");
  }
}
