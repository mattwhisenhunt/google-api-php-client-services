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
 * The "recommended" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_Service_Books(...);
 *   $recommended = $booksService->recommended;
 *  </code>
 */
class Google_Service_Books_Resource_VolumesRecommended extends Google_Service_Resource
{
  /**
   *  (recommended.listVolumesRecommended)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Books_Volumes
   */
  public function listVolumesRecommended($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Books_Volumes");
  }
  /**
   *  (recommended.rate)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Books_BooksVolumesRecommendedRateResponse
   */
  public function rate($rating, $volumeId, $optParams = array())
  {
    $params = array('rating' => $rating, 'volumeId' => $volumeId);
    $params = array_merge($params, $optParams);
    return $this->call('rate', array($params), "Google_Service_Books_BooksVolumesRecommendedRateResponse");
  }
}
