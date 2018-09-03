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
 * The "bucketAccessControls" collection of methods.
 * Typical usage is:
 *  <code>
 *   $storageService = new Google_Service_Storage(...);
 *   $bucketAccessControls = $storageService->bucketAccessControls;
 *  </code>
 */
class Google_Service_Storage_Resource_BucketAccessControls extends Google_Service_Resource
{
  /**
   *  (bucketAccessControls.delete)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function delete($bucket, $entity, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'entity' => $entity);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (bucketAccessControls.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_BucketAccessControl
   */
  public function get($bucket, $entity, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'entity' => $entity);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Storage_BucketAccessControl");
  }
  /**
   *  (bucketAccessControls.insert)
   *
   * @param Google_Service_Storage_BucketAccessControl $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_BucketAccessControl
   */
  public function insert($bucket, Google_Service_Storage_BucketAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Storage_BucketAccessControl");
  }
  /**
   *  (bucketAccessControls.listBucketAccessControls)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_BucketAccessControls
   */
  public function listBucketAccessControls($bucket, $optParams = array())
  {
    $params = array('bucket' => $bucket);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Storage_BucketAccessControls");
  }
  /**
   *  (bucketAccessControls.patch)
   *
   * @param Google_Service_Storage_BucketAccessControl $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_BucketAccessControl
   */
  public function patch($bucket, $entity, Google_Service_Storage_BucketAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'entity' => $entity ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Storage_BucketAccessControl");
  }
  /**
   *  (bucketAccessControls.update)
   *
   * @param Google_Service_Storage_BucketAccessControl $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_BucketAccessControl
   */
  public function update($bucket, $entity, Google_Service_Storage_BucketAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'entity' => $entity ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Storage_BucketAccessControl");
  }
}
