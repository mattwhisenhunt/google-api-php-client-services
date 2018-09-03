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
 * The "deployments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $scriptService = new Google_Service_Script(...);
 *   $deployments = $scriptService->deployments;
 *  </code>
 */
class Google_Service_Script_Resource_ProjectsDeployments extends Google_Service_Resource
{
  /**
   *  (deployments.create)
   *
   * @param Google_Service_Script_DeploymentConfig $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_Deployment
   */
  public function create($scriptId, Google_Service_Script_DeploymentConfig $postBody, $optParams = array())
  {
    $params = array('scriptId' => $scriptId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Script_Deployment");
  }
  /**
   *  (deployments.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_ScriptEmpty
   */
  public function delete($scriptId, $deploymentId, $optParams = array())
  {
    $params = array('scriptId' => $scriptId, 'deploymentId' => $deploymentId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Script_ScriptEmpty");
  }
  /**
   *  (deployments.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_Deployment
   */
  public function get($scriptId, $deploymentId, $optParams = array())
  {
    $params = array('scriptId' => $scriptId, 'deploymentId' => $deploymentId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Script_Deployment");
  }
  /**
   *  (deployments.listProjectsDeployments)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Script_ListDeploymentsResponse
   */
  public function listProjectsDeployments($scriptId, $optParams = array())
  {
    $params = array('scriptId' => $scriptId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Script_ListDeploymentsResponse");
  }
  /**
   *  (deployments.update)
   *
   * @param Google_Service_Script_UpdateDeploymentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_Deployment
   */
  public function update($scriptId, $deploymentId, Google_Service_Script_UpdateDeploymentRequest $postBody, $optParams = array())
  {
    $params = array('scriptId' => $scriptId, 'deploymentId' => $deploymentId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Script_Deployment");
  }
}
