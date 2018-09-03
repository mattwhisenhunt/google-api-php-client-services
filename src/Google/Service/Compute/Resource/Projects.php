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
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $projects = $computeService->projects;
 *  </code>
 */
class Google_Service_Compute_Resource_Projects extends Google_Service_Resource
{
  /**
   *  (projects.disableXpnHost)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function disableXpnHost($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('disableXpnHost', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (projects.disableXpnResource)
   *
   * @param Google_Service_Compute_ProjectsDisableXpnResourceRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function disableXpnResource($project, Google_Service_Compute_ProjectsDisableXpnResourceRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('disableXpnResource', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (projects.enableXpnHost)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function enableXpnHost($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('enableXpnHost', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (projects.enableXpnResource)
   *
   * @param Google_Service_Compute_ProjectsEnableXpnResourceRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function enableXpnResource($project, Google_Service_Compute_ProjectsEnableXpnResourceRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('enableXpnResource', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (projects.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Project
   */
  public function get($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_Project");
  }
  /**
   *  (projects.getXpnHost)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Project
   */
  public function getXpnHost($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('getXpnHost', array($params), "Google_Service_Compute_Project");
  }
  /**
   *  (projects.getXpnResources)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_ProjectsGetXpnResources
   */
  public function getXpnResources($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('getXpnResources', array($params), "Google_Service_Compute_ProjectsGetXpnResources");
  }
  /**
   *  (projects.listXpnHosts)
   *
   * @param Google_Service_Compute_ProjectsListXpnHostsRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_XpnHostList
   */
  public function listXpnHosts($project, Google_Service_Compute_ProjectsListXpnHostsRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('listXpnHosts', array($params), "Google_Service_Compute_XpnHostList");
  }
  /**
   *  (projects.moveDisk)
   *
   * @param Google_Service_Compute_DiskMoveRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function moveDisk($project, Google_Service_Compute_DiskMoveRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('moveDisk', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (projects.moveInstance)
   *
   * @param Google_Service_Compute_InstanceMoveRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function moveInstance($project, Google_Service_Compute_InstanceMoveRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('moveInstance', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (projects.setCommonInstanceMetadata)
   *
   * @param Google_Service_Compute_Metadata $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setCommonInstanceMetadata($project, Google_Service_Compute_Metadata $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setCommonInstanceMetadata', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (projects.setDefaultNetworkTier)
   *
   * @param Google_Service_Compute_ProjectsSetDefaultNetworkTierRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setDefaultNetworkTier($project, Google_Service_Compute_ProjectsSetDefaultNetworkTierRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setDefaultNetworkTier', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (projects.setUsageExportBucket)
   *
   * @param Google_Service_Compute_UsageExportLocation $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function setUsageExportBucket($project, Google_Service_Compute_UsageExportLocation $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setUsageExportBucket', array($params), "Google_Service_Compute_Operation");
  }
}
