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
 * The "operations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google_Service_Appengine(...);
 *   $operations = $appengineService->operations;
 *  </code>
 */
class Google_Service_Appengine_Resource_AppsOperations extends Google_Service_Resource
{
  /**
   *  (operations.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_Operation
   */
  public function get($appsId, $operationsId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'operationsId' => $operationsId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Appengine_Operation");
  }
  /**
   *  (operations.listAppsOperations)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Appengine_ListOperationsResponse
   */
  public function listAppsOperations($appsId, $optParams = array())
  {
    $params = array('appsId' => $appsId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Appengine_ListOperationsResponse");
  }
}
