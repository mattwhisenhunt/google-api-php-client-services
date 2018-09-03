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
 * The "dynamicTargetingKeys" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_Service_Dfareporting(...);
 *   $dynamicTargetingKeys = $dfareportingService->dynamicTargetingKeys;
 *  </code>
 */
class Google_Service_Dfareporting_Resource_DynamicTargetingKeys extends Google_Service_Resource
{
  /**
   *  (dynamicTargetingKeys.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($profileId, $objectId, $name, $objectType, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'objectId' => $objectId, 'name' => $name, 'objectType' => $objectType);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (dynamicTargetingKeys.insert)
   *
   * @param Google_Service_Dfareporting_DynamicTargetingKey $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_DynamicTargetingKey
   */
  public function insert($profileId, Google_Service_Dfareporting_DynamicTargetingKey $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Dfareporting_DynamicTargetingKey");
  }
  /**
   *  (dynamicTargetingKeys.listDynamicTargetingKeys)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dfareporting_DynamicTargetingKeysListResponse
   */
  public function listDynamicTargetingKeys($profileId, $optParams = array())
  {
    $params = array('profileId' => $profileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dfareporting_DynamicTargetingKeysListResponse");
  }
}
