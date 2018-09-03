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
 * The "myconfig" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_Service_Books(...);
 *   $myconfig = $booksService->myconfig;
 *  </code>
 */
class Google_Service_Books_Resource_Myconfig extends Google_Service_Resource
{
  /**
   *  (myconfig.getUserSettings)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Books_Usersettings
   */
  public function getUserSettings($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getUserSettings', array($params), "Google_Service_Books_Usersettings");
  }
  /**
   *  (myconfig.releaseDownloadAccess)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Books_DownloadAccesses
   */
  public function releaseDownloadAccess($volumeIds, $cpksver, $optParams = array())
  {
    $params = array('volumeIds' => $volumeIds, 'cpksver' => $cpksver);
    $params = array_merge($params, $optParams);
    return $this->call('releaseDownloadAccess', array($params), "Google_Service_Books_DownloadAccesses");
  }
  /**
   *  (myconfig.requestAccess)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Books_RequestAccess
   */
  public function requestAccess($source, $volumeId, $nonce, $cpksver, $optParams = array())
  {
    $params = array('source' => $source, 'volumeId' => $volumeId, 'nonce' => $nonce, 'cpksver' => $cpksver);
    $params = array_merge($params, $optParams);
    return $this->call('requestAccess', array($params), "Google_Service_Books_RequestAccess");
  }
  /**
   *  (myconfig.syncVolumeLicenses)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Books_Volumes
   */
  public function syncVolumeLicenses($source, $nonce, $cpksver, $optParams = array())
  {
    $params = array('source' => $source, 'nonce' => $nonce, 'cpksver' => $cpksver);
    $params = array_merge($params, $optParams);
    return $this->call('syncVolumeLicenses', array($params), "Google_Service_Books_Volumes");
  }
  /**
   *  (myconfig.updateUserSettings)
   *
   * @param Google_Service_Books_Usersettings $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Books_Usersettings
   */
  public function updateUserSettings(Google_Service_Books_Usersettings $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateUserSettings', array($params), "Google_Service_Books_Usersettings");
  }
}
