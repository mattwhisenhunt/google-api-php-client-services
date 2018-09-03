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
 * The "models" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mlService = new Google_Service_CloudMachineLearningEngine(...);
 *   $models = $mlService->models;
 *  </code>
 */
class Google_Service_CloudMachineLearningEngine_Resource_ProjectsModels extends Google_Service_Resource
{
  /**
   *  (models.create)
   *
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Model $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Model
   */
  public function create($parent, Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Model $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Model");
  }
  /**
   *  (models.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleLongrunningOperation
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_CloudMachineLearningEngine_GoogleLongrunningOperation");
  }
  /**
   *  (models.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Model
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Model");
  }
  /**
   *  (models.getIamPolicy)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleIamV1Policy
   */
  public function getIamPolicy($resource, $optParams = array())
  {
    $params = array('resource' => $resource);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_CloudMachineLearningEngine_GoogleIamV1Policy");
  }
  /**
   *  (models.listProjectsModels)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListModelsResponse
   */
  public function listProjectsModels($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListModelsResponse");
  }
  /**
   *  (models.patch)
   *
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Model $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudMachineLearningEngine_GoogleLongrunningOperation
   */
  public function patch($name, Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Model $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudMachineLearningEngine_GoogleLongrunningOperation");
  }
  /**
   *  (models.setIamPolicy)
   *
   * @param Google_Service_CloudMachineLearningEngine_GoogleIamV1SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleIamV1Policy
   */
  public function setIamPolicy($resource, Google_Service_CloudMachineLearningEngine_GoogleIamV1SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_CloudMachineLearningEngine_GoogleIamV1Policy");
  }
  /**
   *  (models.testIamPermissions)
   *
   * @param Google_Service_CloudMachineLearningEngine_GoogleIamV1TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleIamV1TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_CloudMachineLearningEngine_GoogleIamV1TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_CloudMachineLearningEngine_GoogleIamV1TestIamPermissionsResponse");
  }
}
