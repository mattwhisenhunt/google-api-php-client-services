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
 * The "directorySiteContacts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_Service_Dfareporting(...);
 *   $directorySiteContacts = $dfareportingService->directorySiteContacts;
 *  </code>
 */
class Google_Service_Dfareporting_Resource_DirectorySiteContacts extends Google_Service_Resource
{
  /**
   *  (directorySiteContacts.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_DirectorySiteContact
   */
  public function get($profileId, $id, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Dfareporting_DirectorySiteContact");
  }
  /**
   *  (directorySiteContacts.listDirectorySiteContacts)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dfareporting_DirectorySiteContactsListResponse
   */
  public function listDirectorySiteContacts($profileId, $optParams = array())
  {
    $params = array('profileId' => $profileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dfareporting_DirectorySiteContactsListResponse");
  }
}
