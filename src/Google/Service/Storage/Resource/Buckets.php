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
 * The "buckets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $storageService = new Google_Service_Storage(...);
 *   $buckets = $storageService->buckets;
 *  </code>
 */
class Google_Service_Storage_Resource_Buckets extends Google_Service_Resource
{
  /**
   *  (buckets.delete)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function delete($bucket, $optParams = array())
  {
    $params = array('bucket' => $bucket);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (buckets.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_Bucket
   */
  public function get($bucket, $optParams = array())
  {
    $params = array('bucket' => $bucket);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Storage_Bucket");
  }
  /**
   *  (buckets.getIamPolicy)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_Policy
   */
  public function getIamPolicy($bucket, $optParams = array())
  {
    $params = array('bucket' => $bucket);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_Storage_Policy");
  }
  /**
   *  (buckets.insert)
   *
   * @param Google_Service_Storage_Bucket $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_Bucket
   */
  public function insert($project, Google_Service_Storage_Bucket $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Storage_Bucket");
  }
  /**
   *  (buckets.listBuckets)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_Buckets
   */
  public function listBuckets($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Storage_Buckets");
  }
  /**
   *  (buckets.lockRetentionPolicy)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_Bucket
   */
  public function lockRetentionPolicy($bucket, $ifMetagenerationMatch, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'ifMetagenerationMatch' => $ifMetagenerationMatch);
    $params = array_merge($params, $optParams);
    return $this->call('lockRetentionPolicy', array($params), "Google_Service_Storage_Bucket");
  }
  /**
   *  (buckets.patch)
   *
   * @param Google_Service_Storage_Bucket $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_Bucket
   */
  public function patch($bucket, Google_Service_Storage_Bucket $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Storage_Bucket");
  }
  /**
   *  (buckets.setIamPolicy)
   *
   * @param Google_Service_Storage_Policy $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_Policy
   */
  public function setIamPolicy($bucket, Google_Service_Storage_Policy $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_Storage_Policy");
  }
  /**
   *  (buckets.testIamPermissions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_TestIamPermissionsResponse
   */
  public function testIamPermissions($bucket, $permissions, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'permissions' => $permissions);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_Storage_TestIamPermissionsResponse");
  }
  /**
   *  (buckets.update)
   *
   * @param Google_Service_Storage_Bucket $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_Bucket
   */
  public function update($bucket, Google_Service_Storage_Bucket $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Storage_Bucket");
  }
}
