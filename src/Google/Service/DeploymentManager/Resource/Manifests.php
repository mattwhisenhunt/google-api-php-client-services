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
 * The "manifests" collection of methods.
 * Typical usage is:
 *  <code>
 *   $deploymentmanagerService = new Google_Service_DeploymentManager(...);
 *   $manifests = $deploymentmanagerService->manifests;
 *  </code>
 */
class Google_Service_DeploymentManager_Resource_Manifests extends Google_Service_Resource
{
  /**
   *  (manifests.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_DeploymentManager_Manifest
   */
  public function get($project, $deployment, $manifest, $optParams = array())
  {
    $params = array('project' => $project, 'deployment' => $deployment, 'manifest' => $manifest);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_DeploymentManager_Manifest");
  }
  /**
   *  (manifests.listManifests)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_DeploymentManager_ManifestsListResponse
   */
  public function listManifests($project, $deployment, $optParams = array())
  {
    $params = array('project' => $project, 'deployment' => $deployment);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_DeploymentManager_ManifestsListResponse");
  }
}
