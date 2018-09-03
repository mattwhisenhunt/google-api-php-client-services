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
 * The "readingpositions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_Service_Books(...);
 *   $readingpositions = $booksService->readingpositions;
 *  </code>
 */
class Google_Service_Books_Resource_MylibraryReadingpositions extends Google_Service_Resource
{
  /**
   *  (readingpositions.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Books_ReadingPosition
   */
  public function get($volumeId, $optParams = array())
  {
    $params = array('volumeId' => $volumeId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Books_ReadingPosition");
  }
  /**
   *  (readingpositions.setPosition)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function setPosition($volumeId, $timestamp, $position, $optParams = array())
  {
    $params = array('volumeId' => $volumeId, 'timestamp' => $timestamp, 'position' => $position);
    $params = array_merge($params, $optParams);
    return $this->call('setPosition', array($params));
  }
}
