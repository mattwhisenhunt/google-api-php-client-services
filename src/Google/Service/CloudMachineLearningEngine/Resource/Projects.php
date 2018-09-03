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
 *   $mlService = new Google_Service_CloudMachineLearningEngine(...);
 *   $projects = $mlService->projects;
 *  </code>
 */
class Google_Service_CloudMachineLearningEngine_Resource_Projects extends Google_Service_Resource
{
  /**
   *  (projects.getConfig)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1GetConfigResponse
   */
  public function getConfig($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getConfig', array($params), "Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1GetConfigResponse");
  }
  /**
   *  (projects.predict)
   *
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1PredictRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleApiHttpBody
   */
  public function predict($name, Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1PredictRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('predict', array($params), "Google_Service_CloudMachineLearningEngine_GoogleApiHttpBody");
  }
}
