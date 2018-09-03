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
 * The "interconnectLocations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $interconnectLocations = $computeService->interconnectLocations;
 *  </code>
 */
class Google_Service_Compute_Resource_InterconnectLocations extends Google_Service_Resource
{
  /**
   *  (interconnectLocations.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_InterconnectLocation
   */
  public function get($project, $interconnectLocation, $optParams = array())
  {
    $params = array('project' => $project, 'interconnectLocation' => $interconnectLocation);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_InterconnectLocation");
  }
  /**
   *  (interconnectLocations.listInterconnectLocations)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_InterconnectLocationList
   */
  public function listInterconnectLocations($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_InterconnectLocationList");
  }
}
