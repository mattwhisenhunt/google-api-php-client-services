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
 * The "repos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sourcerepoService = new Google_Service_CloudSourceRepositories(...);
 *   $repos = $sourcerepoService->repos;
 *  </code>
 */
class Google_Service_CloudSourceRepositories_Resource_ProjectsRepos extends Google_Service_Resource
{
  /**
   *  (repos.create)
   *
   * @param Google_Service_CloudSourceRepositories_Repo $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSourceRepositories_Repo
   */
  public function create($parent, Google_Service_CloudSourceRepositories_Repo $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudSourceRepositories_Repo");
  }
  /**
   *  (repos.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSourceRepositories_SourcerepoEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_CloudSourceRepositories_SourcerepoEmpty");
  }
  /**
   *  (repos.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSourceRepositories_Repo
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudSourceRepositories_Repo");
  }
  /**
   *  (repos.getIamPolicy)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSourceRepositories_Policy
   */
  public function getIamPolicy($resource, $optParams = array())
  {
    $params = array('resource' => $resource);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_CloudSourceRepositories_Policy");
  }
  /**
   *  (repos.listProjectsRepos)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudSourceRepositories_ListReposResponse
   */
  public function listProjectsRepos($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudSourceRepositories_ListReposResponse");
  }
  /**
   *  (repos.patch)
   *
   * @param Google_Service_CloudSourceRepositories_UpdateRepoRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSourceRepositories_Repo
   */
  public function patch($name, Google_Service_CloudSourceRepositories_UpdateRepoRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudSourceRepositories_Repo");
  }
  /**
   *  (repos.setIamPolicy)
   *
   * @param Google_Service_CloudSourceRepositories_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSourceRepositories_Policy
   */
  public function setIamPolicy($resource, Google_Service_CloudSourceRepositories_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_CloudSourceRepositories_Policy");
  }
  /**
   *  (repos.testIamPermissions)
   *
   * @param Google_Service_CloudSourceRepositories_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSourceRepositories_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_CloudSourceRepositories_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_CloudSourceRepositories_TestIamPermissionsResponse");
  }
}
