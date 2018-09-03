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
 * The "versions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tagmanagerService = new Google_Service_TagManager(...);
 *   $versions = $tagmanagerService->versions;
 *  </code>
 */
class Google_Service_TagManager_Resource_AccountsContainersVersions extends Google_Service_Resource
{
  /**
   *  (versions.delete)
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
   *  (versions.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_TagManager_ContainerVersion
   */
  public function get($path, $optParams = array())
  {
    $params = array('path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_TagManager_ContainerVersion");
  }
  /**
   *  (versions.live)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_ContainerVersion
   */
  public function live($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('live', array($params), "Google_Service_TagManager_ContainerVersion");
  }
  /**
   *  (versions.publish)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_TagManager_PublishContainerVersionResponse
   */
  public function publish($path, $optParams = array())
  {
    $params = array('path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('publish', array($params), "Google_Service_TagManager_PublishContainerVersionResponse");
  }
  /**
   *  (versions.set_latest)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_ContainerVersion
   */
  public function set_latest($path, $optParams = array())
  {
    $params = array('path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('set_latest', array($params), "Google_Service_TagManager_ContainerVersion");
  }
  /**
   *  (versions.undelete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_ContainerVersion
   */
  public function undelete($path, $optParams = array())
  {
    $params = array('path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('undelete', array($params), "Google_Service_TagManager_ContainerVersion");
  }
  /**
   *  (versions.update)
   *
   * @param Google_Service_TagManager_ContainerVersion $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_TagManager_ContainerVersion
   */
  public function update($path, Google_Service_TagManager_ContainerVersion $postBody, $optParams = array())
  {
    $params = array('path' => $path ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_TagManager_ContainerVersion");
  }
}
