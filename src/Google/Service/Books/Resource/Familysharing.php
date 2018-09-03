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
 * The "familysharing" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_Service_Books(...);
 *   $familysharing = $booksService->familysharing;
 *  </code>
 */
class Google_Service_Books_Resource_Familysharing extends Google_Service_Resource
{
  /**
   *  (familysharing.getFamilyInfo)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Books_FamilyInfo
   */
  public function getFamilyInfo($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getFamilyInfo', array($params), "Google_Service_Books_FamilyInfo");
  }
  /**
   *  (familysharing.share)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function share($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('share', array($params));
  }
  /**
   *  (familysharing.unshare)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function unshare($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('unshare', array($params));
  }
}
