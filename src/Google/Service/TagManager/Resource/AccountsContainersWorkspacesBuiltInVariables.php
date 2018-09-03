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
 * The "built_in_variables" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tagmanagerService = new Google_Service_TagManager(...);
 *   $built_in_variables = $tagmanagerService->built_in_variables;
 *  </code>
 */
class Google_Service_TagManager_Resource_AccountsContainersWorkspacesBuiltInVariables extends Google_Service_Resource
{
  /**
   *  (built_in_variables.create)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_TagManager_CreateBuiltInVariableResponse
   */
  public function create($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_TagManager_CreateBuiltInVariableResponse");
  }
  /**
   *  (built_in_variables.delete)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function delete($path, $optParams = array())
  {
    $params = array('path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (built_in_variables.listAccountsContainersWorkspacesBuiltInVariables)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_TagManager_ListEnabledBuiltInVariablesResponse
   */
  public function listAccountsContainersWorkspacesBuiltInVariables($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_TagManager_ListEnabledBuiltInVariablesResponse");
  }
  /**
   *  (built_in_variables.revert)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_TagManager_RevertBuiltInVariableResponse
   */
  public function revert($path, $optParams = array())
  {
    $params = array('path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('revert', array($params), "Google_Service_TagManager_RevertBuiltInVariableResponse");
  }
}
