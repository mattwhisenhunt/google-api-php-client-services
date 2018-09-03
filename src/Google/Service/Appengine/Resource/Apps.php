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
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google_Service_Appengine(...);
 *   $apps = $appengineService->apps;
 *  </code>
 */
class Google_Service_Appengine_Resource_Apps extends Google_Service_Resource
{
  /**
   *  (apps.create)
   *
   * @param Google_Service_Appengine_Application $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_Operation
   */
  public function create(Google_Service_Appengine_Application $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Appengine_Operation");
  }
  /**
   *  (apps.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_Application
   */
  public function get($appsId, $optParams = array())
  {
    $params = array('appsId' => $appsId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Appengine_Application");
  }
  /**
   *  (apps.patch)
   *
   * @param Google_Service_Appengine_Application $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Appengine_Operation
   */
  public function patch($appsId, Google_Service_Appengine_Application $postBody, $optParams = array())
  {
    $params = array('appsId' => $appsId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Appengine_Operation");
  }
  /**
   *  (apps.repair)
   *
   * @param Google_Service_Appengine_RepairApplicationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_Operation
   */
  public function repair($appsId, Google_Service_Appengine_RepairApplicationRequest $postBody, $optParams = array())
  {
    $params = array('appsId' => $appsId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('repair', array($params), "Google_Service_Appengine_Operation");
  }
}
