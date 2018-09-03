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
 * The "acceleratorTypes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $acceleratorTypes = $computeService->acceleratorTypes;
 *  </code>
 */
class Google_Service_Compute_Resource_AcceleratorTypes extends Google_Service_Resource
{
  /**
   *  (acceleratorTypes.aggregatedList)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_AcceleratorTypeAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), "Google_Service_Compute_AcceleratorTypeAggregatedList");
  }
  /**
   *  (acceleratorTypes.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_AcceleratorType
   */
  public function get($project, $zone, $acceleratorType, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'acceleratorType' => $acceleratorType);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_AcceleratorType");
  }
  /**
   *  (acceleratorTypes.listAcceleratorTypes)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_AcceleratorTypeList
   */
  public function listAcceleratorTypes($project, $zone, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_AcceleratorTypeList");
  }
}
