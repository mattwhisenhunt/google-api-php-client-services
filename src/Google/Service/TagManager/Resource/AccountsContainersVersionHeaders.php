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
 * The "version_headers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tagmanagerService = new Google_Service_TagManager(...);
 *   $version_headers = $tagmanagerService->version_headers;
 *  </code>
 */
class Google_Service_TagManager_Resource_AccountsContainersVersionHeaders extends Google_Service_Resource
{
  /**
   *  (version_headers.latest)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_ContainerVersionHeader
   */
  public function latest($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('latest', array($params), "Google_Service_TagManager_ContainerVersionHeader");
  }
  /**
   *  (version_headers.listAccountsContainersVersionHeaders)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_TagManager_ListContainerVersionsResponse
   */
  public function listAccountsContainersVersionHeaders($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_TagManager_ListContainerVersionsResponse");
  }
}
