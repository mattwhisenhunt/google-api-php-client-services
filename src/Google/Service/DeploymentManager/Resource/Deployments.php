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
 *   $deploymentmanagerService = new Google_Service_DeploymentManager(...);
 *   $deployments = $deploymentmanagerService->deployments;
 *  </code>
 */
class Google_Service_DeploymentManager_Resource_Deployments extends Google_Service_Resource
{
  /**
   *  (deployments.cancelPreview)
   *
   * @param Google_Service_DeploymentManager_DeploymentsCancelPreviewRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DeploymentManager_Operation
   */
  public function cancelPreview($project, $deployment, Google_Service_DeploymentManager_DeploymentsCancelPreviewRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'deployment' => $deployment ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('cancelPreview', array($params), "Google_Service_DeploymentManager_Operation");
  }
  /**
   *  (deployments.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_DeploymentManager_Operation
   */
  public function delete($project, $deployment, $optParams = array())
  {
    $params = array('project' => $project, 'deployment' => $deployment);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_DeploymentManager_Operation");
  }
  /**
   *  (deployments.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_DeploymentManager_Deployment
   */
  public function get($project, $deployment, $optParams = array())
  {
    $params = array('project' => $project, 'deployment' => $deployment);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_DeploymentManager_Deployment");
  }
  /**
   *  (deployments.getIamPolicy)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_DeploymentManager_Policy
   */
  public function getIamPolicy($project, $resource, $optParams = array())
  {
    $params = array('project' => $project, 'resource' => $resource);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_DeploymentManager_Policy");
  }
  /**
   *  (deployments.insert)
   *
   * @param Google_Service_DeploymentManager_Deployment $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_DeploymentManager_Operation
   */
  public function insert($project, Google_Service_DeploymentManager_Deployment $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_DeploymentManager_Operation");
  }
  /**
   *  (deployments.listDeployments)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_DeploymentManager_DeploymentsListResponse
   */
  public function listDeployments($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_DeploymentManager_DeploymentsListResponse");
  }
  /**
   *  (deployments.patch)
   *
   * @param Google_Service_DeploymentManager_Deployment $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_DeploymentManager_Operation
   */
  public function patch($project, $deployment, Google_Service_DeploymentManager_Deployment $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'deployment' => $deployment ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_DeploymentManager_Operation");
  }
  /**
   *  (deployments.setIamPolicy)
   *
   * @param Google_Service_DeploymentManager_GlobalSetPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DeploymentManager_Policy
   */
  public function setIamPolicy($project, $resource, Google_Service_DeploymentManager_GlobalSetPolicyRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_DeploymentManager_Policy");
  }
  /**
   *  (deployments.stop)
   *
   * @param Google_Service_DeploymentManager_DeploymentsStopRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DeploymentManager_Operation
   */
  public function stop($project, $deployment, Google_Service_DeploymentManager_DeploymentsStopRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'deployment' => $deployment ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('stop', array($params), "Google_Service_DeploymentManager_Operation");
  }
  /**
   *  (deployments.testIamPermissions)
   *
   * @param Google_Service_DeploymentManager_TestPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DeploymentManager_TestPermissionsResponse
   */
  public function testIamPermissions($project, $resource, Google_Service_DeploymentManager_TestPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_DeploymentManager_TestPermissionsResponse");
  }
  /**
   *  (deployments.update)
   *
   * @param Google_Service_DeploymentManager_Deployment $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_DeploymentManager_Operation
   */
  public function update($project, $deployment, Google_Service_DeploymentManager_Deployment $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'deployment' => $deployment ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_DeploymentManager_Operation");
  }
}
