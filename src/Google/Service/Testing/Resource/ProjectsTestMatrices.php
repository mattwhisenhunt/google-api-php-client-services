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
 * The "testMatrices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $testingService = new Google_Service_Testing(...);
 *   $testMatrices = $testingService->testMatrices;
 *  </code>
 */
class Google_Service_Testing_Resource_ProjectsTestMatrices extends Google_Service_Resource
{
  /**
   *  (testMatrices.cancel)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Testing_CancelTestMatrixResponse
   */
  public function cancel($projectId, $testMatrixId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'testMatrixId' => $testMatrixId);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params), "Google_Service_Testing_CancelTestMatrixResponse");
  }
  /**
   *  (testMatrices.create)
   *
   * @param Google_Service_Testing_TestMatrix $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Testing_TestMatrix
   */
  public function create($projectId, Google_Service_Testing_TestMatrix $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Testing_TestMatrix");
  }
  /**
   *  (testMatrices.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Testing_TestMatrix
   */
  public function get($projectId, $testMatrixId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'testMatrixId' => $testMatrixId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Testing_TestMatrix");
  }
}
