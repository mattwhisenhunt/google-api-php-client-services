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
 * The "objects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $storageService = new Google_Service_Storage(...);
 *   $objects = $storageService->objects;
 *  </code>
 */
class Google_Service_Storage_Resource_Objects extends Google_Service_Resource
{
  /**
   *  (objects.compose)
   *
   * @param Google_Service_Storage_ComposeRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_StorageObject
   */
  public function compose($destinationBucket, $destinationObject, Google_Service_Storage_ComposeRequest $postBody, $optParams = array())
  {
    $params = array('destinationBucket' => $destinationBucket, 'destinationObject' => $destinationObject ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('compose', array($params), "Google_Service_Storage_StorageObject");
  }
  /**
   *  (objects.copy)
   *
   * @param Google_Service_Storage_StorageObject $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_StorageObject
   */
  public function copy($sourceBucket, $sourceObject, $destinationBucket, $destinationObject, Google_Service_Storage_StorageObject $postBody, $optParams = array())
  {
    $params = array('sourceBucket' => $sourceBucket, 'sourceObject' => $sourceObject, 'destinationBucket' => $destinationBucket, 'destinationObject' => $destinationObject ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('copy', array($params), "Google_Service_Storage_StorageObject");
  }
  /**
   *  (objects.delete)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function delete($bucket, $object, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (objects.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_StorageObject
   */
  public function get($bucket, $object, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Storage_StorageObject");
  }
  /**
   *  (objects.getIamPolicy)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_Policy
   */
  public function getIamPolicy($bucket, $object, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_Storage_Policy");
  }
  /**
   *  (objects.insert)
   *
   * @param Google_Service_Storage_StorageObject $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_StorageObject
   */
  public function insert($bucket, Google_Service_Storage_StorageObject $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Storage_StorageObject");
  }
  /**
   *  (objects.listObjects)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_Objects
   */
  public function listObjects($bucket, $optParams = array())
  {
    $params = array('bucket' => $bucket);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Storage_Objects");
  }
  /**
   *  (objects.patch)
   *
   * @param Google_Service_Storage_StorageObject $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_StorageObject
   */
  public function patch($bucket, $object, Google_Service_Storage_StorageObject $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Storage_StorageObject");
  }
  /**
   *  (objects.rewrite)
   *
   * @param Google_Service_Storage_StorageObject $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_RewriteResponse
   */
  public function rewrite($sourceBucket, $sourceObject, $destinationBucket, $destinationObject, Google_Service_Storage_StorageObject $postBody, $optParams = array())
  {
    $params = array('sourceBucket' => $sourceBucket, 'sourceObject' => $sourceObject, 'destinationBucket' => $destinationBucket, 'destinationObject' => $destinationObject ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('rewrite', array($params), "Google_Service_Storage_RewriteResponse");
  }
  /**
   *  (objects.setIamPolicy)
   *
   * @param Google_Service_Storage_Policy $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_Policy
   */
  public function setIamPolicy($bucket, $object, Google_Service_Storage_Policy $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_Storage_Policy");
  }
  /**
   *  (objects.testIamPermissions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_TestIamPermissionsResponse
   */
  public function testIamPermissions($bucket, $object, $permissions, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object, 'permissions' => $permissions);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_Storage_TestIamPermissionsResponse");
  }
  /**
   *  (objects.update)
   *
   * @param Google_Service_Storage_StorageObject $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_StorageObject
   */
  public function update($bucket, $object, Google_Service_Storage_StorageObject $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Storage_StorageObject");
  }
  /**
   *  (objects.watchAll)
   *
   * @param Google_Service_Storage_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_Channel
   */
  public function watchAll($bucket, Google_Service_Storage_Channel $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watchAll', array($params), "Google_Service_Storage_Channel");
  }
}
