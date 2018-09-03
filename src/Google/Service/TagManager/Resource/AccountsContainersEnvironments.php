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
 * The "environments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tagmanagerService = new Google_Service_TagManager(...);
 *   $environments = $tagmanagerService->environments;
 *  </code>
 */
class Google_Service_TagManager_Resource_AccountsContainersEnvironments extends Google_Service_Resource
{
  /**
   *  (environments.create)
   *
   * @param Google_Service_TagManager_Environment $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_Environment
   */
  public function create($parent, Google_Service_TagManager_Environment $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_TagManager_Environment");
  }
  /**
   *  (environments.delete)
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
   *  (environments.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_Environment
   */
  public function get($path, $optParams = array())
  {
    $params = array('path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_TagManager_Environment");
  }
  /**
   *  (environments.listAccountsContainersEnvironments)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_TagManager_ListEnvironmentsResponse
   */
  public function listAccountsContainersEnvironments($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_TagManager_ListEnvironmentsResponse");
  }
  /**
   *  (environments.patch)
   *
   * @param Google_Service_TagManager_Environment $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_TagManager_Environment
   */
  public function patch($path, Google_Service_TagManager_Environment $postBody, $optParams = array())
  {
    $params = array('path' => $path ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_TagManager_Environment");
  }
  /**
   *  (environments.reauthorize)
   *
   * @param Google_Service_TagManager_Environment $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_Environment
   */
  public function reauthorize($path, Google_Service_TagManager_Environment $postBody, $optParams = array())
  {
    $params = array('path' => $path ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reauthorize', array($params), "Google_Service_TagManager_Environment");
  }
  /**
   *  (environments.update)
   *
   * @param Google_Service_TagManager_Environment $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_TagManager_Environment
   */
  public function update($path, Google_Service_TagManager_Environment $postBody, $optParams = array())
  {
    $params = array('path' => $path ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_TagManager_Environment");
  }
}
