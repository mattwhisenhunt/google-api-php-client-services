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
 * The "regionDisks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $regionDisks = $computeService->regionDisks;
 *  </code>
 */
class Google_Service_Compute_Resource_RegionDisks extends Google_Service_Resource
{
  /**
   *  (regionDisks.createSnapshot)
   *
   * @param Google_Service_Compute_Snapshot $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function createSnapshot($project, $region, $disk, Google_Service_Compute_Snapshot $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'disk' => $disk ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createSnapshot', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionDisks.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $region, $disk, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'disk' => $disk);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionDisks.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Disk
   */
  public function get($project, $region, $disk, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'disk' => $disk);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_Disk");
  }
  /**
   *  (regionDisks.insert)
   *
   * @param Google_Service_Compute_Disk $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, $region, Google_Service_Compute_Disk $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionDisks.listRegionDisks)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_DiskList
   */
  public function listRegionDisks($project, $region, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_DiskList");
  }
  /**
   *  (regionDisks.resize)
   *
   * @param Google_Service_Compute_RegionDisksResizeRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function resize($project, $region, $disk, Google_Service_Compute_RegionDisksResizeRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'disk' => $disk ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('resize', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionDisks.setLabels)
   *
   * @param Google_Service_Compute_RegionSetLabelsRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setLabels($project, $region, $resource, Google_Service_Compute_RegionSetLabelsRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setLabels', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (regionDisks.testIamPermissions)
   *
   * @param Google_Service_Compute_TestPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_TestPermissionsResponse
   */
  public function testIamPermissions($project, $region, $resource, Google_Service_Compute_TestPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_Compute_TestPermissionsResponse");
  }
}
