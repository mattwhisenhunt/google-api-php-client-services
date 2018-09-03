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
 *   $scriptService = new Google_Service_Script(...);
 *   $versions = $scriptService->versions;
 *  </code>
 */
class Google_Service_Script_Resource_ProjectsVersions extends Google_Service_Resource
{
  /**
   *  (versions.create)
   *
   * @param Google_Service_Script_Version $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_Version
   */
  public function create($scriptId, Google_Service_Script_Version $postBody, $optParams = array())
  {
    $params = array('scriptId' => $scriptId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Script_Version");
  }
  /**
   *  (versions.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_Version
   */
  public function get($scriptId, $versionNumber, $optParams = array())
  {
    $params = array('scriptId' => $scriptId, 'versionNumber' => $versionNumber);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Script_Version");
  }
  /**
   *  (versions.listProjectsVersions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Script_ListVersionsResponse
   */
  public function listProjectsVersions($scriptId, $optParams = array())
  {
    $params = array('scriptId' => $scriptId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Script_ListVersionsResponse");
  }
}
