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
 * The "folders" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudresourcemanagerService = new Google_Service_CloudResourceManager(...);
 *   $folders = $cloudresourcemanagerService->folders;
 *  </code>
 */
class Google_Service_CloudResourceManager_Resource_Folders extends Google_Service_Resource
{
  /**
   *  (folders.create)
   *
   * @param Google_Service_CloudResourceManager_Folder $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudResourceManager_Operation
   */
  public function create(Google_Service_CloudResourceManager_Folder $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudResourceManager_Operation");
  }
  /**
   *  (folders.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudResourceManager_Folder
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_CloudResourceManager_Folder");
  }
  /**
   *  (folders.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudResourceManager_Folder
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudResourceManager_Folder");
  }
  /**
   *  (folders.getIamPolicy)
   *
   * @param Google_Service_CloudResourceManager_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudResourceManager_Policy
   */
  public function getIamPolicy($resource, Google_Service_CloudResourceManager_GetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_CloudResourceManager_Policy");
  }
  /**
   *  (folders.listFolders)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudResourceManager_ListFoldersResponse
   */
  public function listFolders($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudResourceManager_ListFoldersResponse");
  }
  /**
   *  (folders.move)
   *
   * @param Google_Service_CloudResourceManager_MoveFolderRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudResourceManager_Operation
   */
  public function move($name, Google_Service_CloudResourceManager_MoveFolderRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('move', array($params), "Google_Service_CloudResourceManager_Operation");
  }
  /**
   *  (folders.patch)
   *
   * @param Google_Service_CloudResourceManager_Folder $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudResourceManager_Folder
   */
  public function patch($name, Google_Service_CloudResourceManager_Folder $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudResourceManager_Folder");
  }
  /**
   *  (folders.search)
   *
   * @param Google_Service_CloudResourceManager_SearchFoldersRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudResourceManager_SearchFoldersResponse
   */
  public function search(Google_Service_CloudResourceManager_SearchFoldersRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_CloudResourceManager_SearchFoldersResponse");
  }
  /**
   *  (folders.setIamPolicy)
   *
   * @param Google_Service_CloudResourceManager_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudResourceManager_Policy
   */
  public function setIamPolicy($resource, Google_Service_CloudResourceManager_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_CloudResourceManager_Policy");
  }
  /**
   *  (folders.testIamPermissions)
   *
   * @param Google_Service_CloudResourceManager_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudResourceManager_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_CloudResourceManager_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_CloudResourceManager_TestIamPermissionsResponse");
  }
  /**
   *  (folders.undelete)
   *
   * @param Google_Service_CloudResourceManager_UndeleteFolderRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudResourceManager_Folder
   */
  public function undelete($name, Google_Service_CloudResourceManager_UndeleteFolderRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('undelete', array($params), "Google_Service_CloudResourceManager_Folder");
  }
}
