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
 * The "storedInfoTypes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dlpService = new Google_Service_DLP(...);
 *   $storedInfoTypes = $dlpService->storedInfoTypes;
 *  </code>
 */
class Google_Service_DLP_Resource_ProjectsStoredInfoTypes extends Google_Service_Resource
{
  /**
   *  (storedInfoTypes.create)
   *
   * @param Google_Service_DLP_GooglePrivacyDlpV2CreateStoredInfoTypeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DLP_GooglePrivacyDlpV2StoredInfoType
   */
  public function create($parent, Google_Service_DLP_GooglePrivacyDlpV2CreateStoredInfoTypeRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_DLP_GooglePrivacyDlpV2StoredInfoType");
  }
  /**
   *  (storedInfoTypes.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_DLP_GoogleProtobufEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_DLP_GoogleProtobufEmpty");
  }
  /**
   *  (storedInfoTypes.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_DLP_GooglePrivacyDlpV2StoredInfoType
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_DLP_GooglePrivacyDlpV2StoredInfoType");
  }
  /**
   *  (storedInfoTypes.listProjectsStoredInfoTypes)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_DLP_GooglePrivacyDlpV2ListStoredInfoTypesResponse
   */
  public function listProjectsStoredInfoTypes($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_DLP_GooglePrivacyDlpV2ListStoredInfoTypesResponse");
  }
  /**
   *  (storedInfoTypes.patch)
   *
   * @param Google_Service_DLP_GooglePrivacyDlpV2UpdateStoredInfoTypeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DLP_GooglePrivacyDlpV2StoredInfoType
   */
  public function patch($name, Google_Service_DLP_GooglePrivacyDlpV2UpdateStoredInfoTypeRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_DLP_GooglePrivacyDlpV2StoredInfoType");
  }
}
