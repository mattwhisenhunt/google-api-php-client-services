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
 * The "backendBuckets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $backendBuckets = $computeService->backendBuckets;
 *  </code>
 */
class Google_Service_Compute_Resource_BackendBuckets extends Google_Service_Resource
{
  /**
   *  (backendBuckets.addSignedUrlKey)
   *
   * @param Google_Service_Compute_SignedUrlKey $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function addSignedUrlKey($project, $backendBucket, Google_Service_Compute_SignedUrlKey $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'backendBucket' => $backendBucket ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addSignedUrlKey', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (backendBuckets.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $backendBucket, $optParams = array())
  {
    $params = array('project' => $project, 'backendBucket' => $backendBucket);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (backendBuckets.deleteSignedUrlKey)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function deleteSignedUrlKey($project, $backendBucket, $keyName, $optParams = array())
  {
    $params = array('project' => $project, 'backendBucket' => $backendBucket, 'keyName' => $keyName);
    $params = array_merge($params, $optParams);
    return $this->call('deleteSignedUrlKey', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (backendBuckets.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_BackendBucket
   */
  public function get($project, $backendBucket, $optParams = array())
  {
    $params = array('project' => $project, 'backendBucket' => $backendBucket);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_BackendBucket");
  }
  /**
   *  (backendBuckets.insert)
   *
   * @param Google_Service_Compute_BackendBucket $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_BackendBucket $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (backendBuckets.listBackendBuckets)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_BackendBucketList
   */
  public function listBackendBuckets($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_BackendBucketList");
  }
  /**
   *  (backendBuckets.patch)
   *
   * @param Google_Service_Compute_BackendBucket $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function patch($project, $backendBucket, Google_Service_Compute_BackendBucket $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'backendBucket' => $backendBucket ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (backendBuckets.update)
   *
   * @param Google_Service_Compute_BackendBucket $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function update($project, $backendBucket, Google_Service_Compute_BackendBucket $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'backendBucket' => $backendBucket ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Compute_Operation");
  }
}
