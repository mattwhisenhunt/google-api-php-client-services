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
 * The "edits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $edits = $androidpublisherService->edits;
 *  </code>
 */
class Google_Service_AndroidPublisher_Resource_Edits extends Google_Service_Resource
{
  /**
   *  (edits.commit)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_AppEdit
   */
  public function commit($packageName, $editId, $optParams = array())
  {
    $params = array('packageName' => $packageName, 'editId' => $editId);
    $params = array_merge($params, $optParams);
    return $this->call('commit', array($params), "Google_Service_AndroidPublisher_AppEdit");
  }
  /**
   *  (edits.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($packageName, $editId, $optParams = array())
  {
    $params = array('packageName' => $packageName, 'editId' => $editId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (edits.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_AppEdit
   */
  public function get($packageName, $editId, $optParams = array())
  {
    $params = array('packageName' => $packageName, 'editId' => $editId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AndroidPublisher_AppEdit");
  }
  /**
   *  (edits.insert)
   *
   * @param Google_Service_AndroidPublisher_AppEdit $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_AppEdit
   */
  public function insert($packageName, Google_Service_AndroidPublisher_AppEdit $postBody, $optParams = array())
  {
    $params = array('packageName' => $packageName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_AndroidPublisher_AppEdit");
  }
  /**
   *  (edits.validate)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_AppEdit
   */
  public function validate($packageName, $editId, $optParams = array())
  {
    $params = array('packageName' => $packageName, 'editId' => $editId);
    $params = array_merge($params, $optParams);
    return $this->call('validate', array($params), "Google_Service_AndroidPublisher_AppEdit");
  }
}
