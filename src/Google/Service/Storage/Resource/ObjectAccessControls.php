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
 * The "objectAccessControls" collection of methods.
 * Typical usage is:
 *  <code>
 *   $storageService = new Google_Service_Storage(...);
 *   $objectAccessControls = $storageService->objectAccessControls;
 *  </code>
 */
class Google_Service_Storage_Resource_ObjectAccessControls extends Google_Service_Resource
{
  /**
   *  (objectAccessControls.delete)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function delete($bucket, $object, $entity, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (objectAccessControls.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_ObjectAccessControl
   */
  public function get($bucket, $object, $entity, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Storage_ObjectAccessControl");
  }
  /**
   *  (objectAccessControls.insert)
   *
   * @param Google_Service_Storage_ObjectAccessControl $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_ObjectAccessControl
   */
  public function insert($bucket, $object, Google_Service_Storage_ObjectAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Storage_ObjectAccessControl");
  }
  /**
   *  (objectAccessControls.listObjectAccessControls)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_ObjectAccessControls
   */
  public function listObjectAccessControls($bucket, $object, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Storage_ObjectAccessControls");
  }
  /**
   *  (objectAccessControls.patch)
   *
   * @param Google_Service_Storage_ObjectAccessControl $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_ObjectAccessControl
   */
  public function patch($bucket, $object, $entity, Google_Service_Storage_ObjectAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Storage_ObjectAccessControl");
  }
  /**
   *  (objectAccessControls.update)
   *
   * @param Google_Service_Storage_ObjectAccessControl $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Storage_ObjectAccessControl
   */
  public function update($bucket, $object, $entity, Google_Service_Storage_ObjectAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Storage_ObjectAccessControl");
  }
}
