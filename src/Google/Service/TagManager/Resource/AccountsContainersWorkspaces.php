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
 * The "workspaces" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tagmanagerService = new Google_Service_TagManager(...);
 *   $workspaces = $tagmanagerService->workspaces;
 *  </code>
 */
class Google_Service_TagManager_Resource_AccountsContainersWorkspaces extends Google_Service_Resource
{
  /**
   *  (workspaces.create)
   *
   * @param Google_Service_TagManager_Workspace $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_Workspace
   */
  public function create($parent, Google_Service_TagManager_Workspace $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_TagManager_Workspace");
  }
  /**
   *  (workspaces.create_version)
   *
   * @param Google_Service_TagManager_CreateContainerVersionRequestVersionOptions $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_CreateContainerVersionResponse
   */
  public function create_version($path, Google_Service_TagManager_CreateContainerVersionRequestVersionOptions $postBody, $optParams = array())
  {
    $params = array('path' => $path ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create_version', array($params), "Google_Service_TagManager_CreateContainerVersionResponse");
  }
  /**
   *  (workspaces.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($path, $optParams = array())
  {
    $params = array('path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (workspaces.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_Workspace
   */
  public function get($path, $optParams = array())
  {
    $params = array('path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_TagManager_Workspace");
  }
  /**
   *  (workspaces.getProposal)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_WorkspaceProposal
   */
  public function getProposal($path, $optParams = array())
  {
    $params = array('path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('getProposal', array($params), "Google_Service_TagManager_WorkspaceProposal");
  }
  /**
   *  (workspaces.getStatus)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_GetWorkspaceStatusResponse
   */
  public function getStatus($path, $optParams = array())
  {
    $params = array('path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('getStatus', array($params), "Google_Service_TagManager_GetWorkspaceStatusResponse");
  }
  /**
   *  (workspaces.listAccountsContainersWorkspaces)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_TagManager_ListWorkspacesResponse
   */
  public function listAccountsContainersWorkspaces($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_TagManager_ListWorkspacesResponse");
  }
  /**
   *  (workspaces.quick_preview)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_QuickPreviewResponse
   */
  public function quick_preview($path, $optParams = array())
  {
    $params = array('path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('quick_preview', array($params), "Google_Service_TagManager_QuickPreviewResponse");
  }
  /**
   *  (workspaces.resolve_conflict)
   *
   * @param Google_Service_TagManager_Entity $postBody
   * @param array $optParams Optional parameters.
   *

   */
  public function resolve_conflict($path, Google_Service_TagManager_Entity $postBody, $optParams = array())
  {
    $params = array('path' => $path ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('resolve_conflict', array($params));
  }
  /**
   *  (workspaces.sync)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_SyncWorkspaceResponse
   */
  public function sync($path, $optParams = array())
  {
    $params = array('path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('sync', array($params), "Google_Service_TagManager_SyncWorkspaceResponse");
  }
  /**
   *  (workspaces.update)
   *
   * @param Google_Service_TagManager_Workspace $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_TagManager_Workspace
   */
  public function update($path, Google_Service_TagManager_Workspace $postBody, $optParams = array())
  {
    $params = array('path' => $path ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_TagManager_Workspace");
  }
  /**
   *  (workspaces.updateProposal)
   *
   * @param Google_Service_TagManager_UpdateWorkspaceProposalRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_WorkspaceProposal
   */
  public function updateProposal($path, Google_Service_TagManager_UpdateWorkspaceProposalRequest $postBody, $optParams = array())
  {
    $params = array('path' => $path ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateProposal', array($params), "Google_Service_TagManager_WorkspaceProposal");
  }
}
