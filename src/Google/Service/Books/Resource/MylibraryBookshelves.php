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
 * The "bookshelves" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_Service_Books(...);
 *   $bookshelves = $booksService->bookshelves;
 *  </code>
 */
class Google_Service_Books_Resource_MylibraryBookshelves extends Google_Service_Resource
{
  /**
   *  (bookshelves.addVolume)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function addVolume($shelf, $volumeId, $optParams = array())
  {
    $params = array('shelf' => $shelf, 'volumeId' => $volumeId);
    $params = array_merge($params, $optParams);
    return $this->call('addVolume', array($params));
  }
  /**
   *  (bookshelves.clearVolumes)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function clearVolumes($shelf, $optParams = array())
  {
    $params = array('shelf' => $shelf);
    $params = array_merge($params, $optParams);
    return $this->call('clearVolumes', array($params));
  }
  /**
   *  (bookshelves.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Books_Bookshelf
   */
  public function get($shelf, $optParams = array())
  {
    $params = array('shelf' => $shelf);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Books_Bookshelf");
  }
  /**
   *  (bookshelves.listMylibraryBookshelves)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Books_Bookshelves
   */
  public function listMylibraryBookshelves($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Books_Bookshelves");
  }
  /**
   *  (bookshelves.moveVolume)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function moveVolume($shelf, $volumeId, $volumePosition, $optParams = array())
  {
    $params = array('shelf' => $shelf, 'volumeId' => $volumeId, 'volumePosition' => $volumePosition);
    $params = array_merge($params, $optParams);
    return $this->call('moveVolume', array($params));
  }
  /**
   *  (bookshelves.removeVolume)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function removeVolume($shelf, $volumeId, $optParams = array())
  {
    $params = array('shelf' => $shelf, 'volumeId' => $volumeId);
    $params = array_merge($params, $optParams);
    return $this->call('removeVolume', array($params));
  }
}
