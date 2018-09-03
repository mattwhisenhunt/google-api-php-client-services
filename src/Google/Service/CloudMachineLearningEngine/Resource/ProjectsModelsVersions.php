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
 * The "versions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mlService = new Google_Service_CloudMachineLearningEngine(...);
 *   $versions = $mlService->versions;
 *  </code>
 */
class Google_Service_CloudMachineLearningEngine_Resource_ProjectsModelsVersions extends Google_Service_Resource
{
  /**
   *  (versions.create)
   *
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Version $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleLongrunningOperation
   */
  public function create($parent, Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Version $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudMachineLearningEngine_GoogleLongrunningOperation");
  }
  /**
   *  (versions.delete)
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
   *  (versions.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Version
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Version");
  }
  /**
   *  (versions.listProjectsModelsVersions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListVersionsResponse
   */
  public function listProjectsModelsVersions($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListVersionsResponse");
  }
  /**
   *  (versions.patch)
   *
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Version $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudMachineLearningEngine_GoogleLongrunningOperation
   */
  public function patch($name, Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Version $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudMachineLearningEngine_GoogleLongrunningOperation");
  }
  /**
   *  (versions.setDefault)
   *
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1SetDefaultVersionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Version
   */
  public function setDefault($name, Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1SetDefaultVersionRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setDefault', array($params), "Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Version");
  }
}
