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
 * The "clusters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataprocService = new Google_Service_Dataproc(...);
 *   $clusters = $dataprocService->clusters;
 *  </code>
 */
class Google_Service_Dataproc_Resource_ProjectsRegionsClusters extends Google_Service_Resource
{
  /**
   *  (clusters.create)
   *
   * @param Google_Service_Dataproc_Cluster $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dataproc_Operation
   */
  public function create($projectId, $region, Google_Service_Dataproc_Cluster $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Dataproc_Operation");
  }
  /**
   *  (clusters.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dataproc_Operation
   */
  public function delete($projectId, $region, $clusterName, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region, 'clusterName' => $clusterName);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Dataproc_Operation");
  }
  /**
   *  (clusters.diagnose)
   *
   * @param Google_Service_Dataproc_DiagnoseClusterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_Operation
   */
  public function diagnose($projectId, $region, $clusterName, Google_Service_Dataproc_DiagnoseClusterRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region, 'clusterName' => $clusterName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('diagnose', array($params), "Google_Service_Dataproc_Operation");
  }
  /**
   *  (clusters.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_Cluster
   */
  public function get($projectId, $region, $clusterName, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region, 'clusterName' => $clusterName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Dataproc_Cluster");
  }
  /**
   *  (clusters.getIamPolicy)
   *
   * @param Google_Service_Dataproc_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_Policy
   */
  public function getIamPolicy($resource, Google_Service_Dataproc_GetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_Dataproc_Policy");
  }
  /**
   *  (clusters.listProjectsRegionsClusters)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dataproc_ListClustersResponse
   */
  public function listProjectsRegionsClusters($projectId, $region, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dataproc_ListClustersResponse");
  }
  /**
   *  (clusters.patch)
   *
   * @param Google_Service_Dataproc_Cluster $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dataproc_Operation
   */
  public function patch($projectId, $region, $clusterName, Google_Service_Dataproc_Cluster $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'region' => $region, 'clusterName' => $clusterName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Dataproc_Operation");
  }
  /**
   *  (clusters.setIamPolicy)
   *
   * @param Google_Service_Dataproc_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_Policy
   */
  public function setIamPolicy($resource, Google_Service_Dataproc_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_Dataproc_Policy");
  }
  /**
   *  (clusters.testIamPermissions)
   *
   * @param Google_Service_Dataproc_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_Dataproc_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_Dataproc_TestIamPermissionsResponse");
  }
}
