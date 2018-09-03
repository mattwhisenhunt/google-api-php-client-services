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
 * The "eventTags" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_Service_Dfareporting(...);
 *   $eventTags = $dfareportingService->eventTags;
 *  </code>
 */
class Google_Service_Dfareporting_Resource_EventTags extends Google_Service_Resource
{
  /**
   *  (eventTags.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($profileId, $id, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (eventTags.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_EventTag
   */
  public function get($profileId, $id, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Dfareporting_EventTag");
  }
  /**
   *  (eventTags.insert)
   *
   * @param Google_Service_Dfareporting_EventTag $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_EventTag
   */
  public function insert($profileId, Google_Service_Dfareporting_EventTag $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Dfareporting_EventTag");
  }
  /**
   *  (eventTags.listEventTags)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dfareporting_EventTagsListResponse
   */
  public function listEventTags($profileId, $optParams = array())
  {
    $params = array('profileId' => $profileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dfareporting_EventTagsListResponse");
  }
  /**
   *  (eventTags.patch)
   *
   * @param Google_Service_Dfareporting_EventTag $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_EventTag
   */
  public function patch($profileId, $id, Google_Service_Dfareporting_EventTag $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Dfareporting_EventTag");
  }
  /**
   *  (eventTags.update)
   *
   * @param Google_Service_Dfareporting_EventTag $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_EventTag
   */
  public function update($profileId, Google_Service_Dfareporting_EventTag $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Dfareporting_EventTag");
  }
}
