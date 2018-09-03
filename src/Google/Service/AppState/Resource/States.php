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
 * The "states" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appstateService = new Google_Service_AppState(...);
 *   $states = $appstateService->states;
 *  </code>
 */
class Google_Service_AppState_Resource_States extends Google_Service_Resource
{
  /**
   *  (states.clear)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AppState_WriteResult
   */
  public function clear($stateKey, $optParams = array())
  {
    $params = array('stateKey' => $stateKey);
    $params = array_merge($params, $optParams);
    return $this->call('clear', array($params), "Google_Service_AppState_WriteResult");
  }
  /**
   *  (states.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($stateKey, $optParams = array())
  {
    $params = array('stateKey' => $stateKey);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (states.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AppState_GetResponse
   */
  public function get($stateKey, $optParams = array())
  {
    $params = array('stateKey' => $stateKey);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AppState_GetResponse");
  }
  /**
   *  (states.listStates)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AppState_ListResponse
   */
  public function listStates($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AppState_ListResponse");
  }
  /**
   *  (states.update)
   *
   * @param Google_Service_AppState_UpdateRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AppState_WriteResult
   */
  public function update($stateKey, Google_Service_AppState_UpdateRequest $postBody, $optParams = array())
  {
    $params = array('stateKey' => $stateKey ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_AppState_WriteResult");
  }
}
