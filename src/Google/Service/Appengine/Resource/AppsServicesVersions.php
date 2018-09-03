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
 *   $appengineService = new Google_Service_Appengine(...);
 *   $versions = $appengineService->versions;
 *  </code>
 */
class Google_Service_Appengine_Resource_AppsServicesVersions extends Google_Service_Resource
{
  /**
   *  (versions.create)
   *
   * @param Google_Service_Appengine_Version $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_Operation
   */
  public function create($appsId, $servicesId, Google_Service_Appengine_Version $postBody, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'servicesId' => $servicesId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Appengine_Operation");
  }
  /**
   *  (versions.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_Operation
   */
  public function delete($appsId, $servicesId, $versionsId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'servicesId' => $servicesId, 'versionsId' => $versionsId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Appengine_Operation");
  }
  /**
   *  (versions.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Appengine_Version
   */
  public function get($appsId, $servicesId, $versionsId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'servicesId' => $servicesId, 'versionsId' => $versionsId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Appengine_Version");
  }
  /**
   *  (versions.listAppsServicesVersions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Appengine_ListVersionsResponse
   */
  public function listAppsServicesVersions($appsId, $servicesId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'servicesId' => $servicesId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Appengine_ListVersionsResponse");
  }
  /**
   *  (versions.patch)
   *
   * @param Google_Service_Appengine_Version $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Appengine_Operation
   */
  public function patch($appsId, $servicesId, $versionsId, Google_Service_Appengine_Version $postBody, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'servicesId' => $servicesId, 'versionsId' => $versionsId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Appengine_Operation");
  }
}
