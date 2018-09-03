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
 * The "variables" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tagmanagerService = new Google_Service_TagManager(...);
 *   $variables = $tagmanagerService->variables;
 *  </code>
 */
class Google_Service_TagManager_Resource_AccountsContainersWorkspacesVariables extends Google_Service_Resource
{
  /**
   *  (variables.create)
   *
   * @param Google_Service_TagManager_Variable $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_Variable
   */
  public function create($parent, Google_Service_TagManager_Variable $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_TagManager_Variable");
  }
  /**
   *  (variables.delete)
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
   *  (variables.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_Variable
   */
  public function get($path, $optParams = array())
  {
    $params = array('path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_TagManager_Variable");
  }
  /**
   *  (variables.listAccountsContainersWorkspacesVariables)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_TagManager_ListVariablesResponse
   */
  public function listAccountsContainersWorkspacesVariables($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_TagManager_ListVariablesResponse");
  }
  /**
   *  (variables.revert)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_TagManager_RevertVariableResponse
   */
  public function revert($path, $optParams = array())
  {
    $params = array('path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('revert', array($params), "Google_Service_TagManager_RevertVariableResponse");
  }
  /**
   *  (variables.update)
   *
   * @param Google_Service_TagManager_Variable $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_TagManager_Variable
   */
  public function update($path, Google_Service_TagManager_Variable $postBody, $optParams = array())
  {
    $params = array('path' => $path ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_TagManager_Variable");
  }
}
