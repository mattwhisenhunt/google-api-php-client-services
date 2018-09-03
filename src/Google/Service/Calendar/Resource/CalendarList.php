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
 * The "calendarList" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $calendarList = $calendarService->calendarList;
 *  </code>
 */
class Google_Service_Calendar_Resource_CalendarList extends Google_Service_Resource
{
  /**
   *  (calendarList.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($calendarId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (calendarList.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Calendar_CalendarListEntry
   */
  public function get($calendarId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Calendar_CalendarListEntry");
  }
  /**
   *  (calendarList.insert)
   *
   * @param Google_Service_Calendar_CalendarListEntry $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_CalendarListEntry
   */
  public function insert(Google_Service_Calendar_CalendarListEntry $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Calendar_CalendarListEntry");
  }
  /**
   *  (calendarList.listCalendarList)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_CalendarList
   */
  public function listCalendarList($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Calendar_CalendarList");
  }
  /**
   *  (calendarList.patch)
   *
   * @param Google_Service_Calendar_CalendarListEntry $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_CalendarListEntry
   */
  public function patch($calendarId, Google_Service_Calendar_CalendarListEntry $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Calendar_CalendarListEntry");
  }
  /**
   *  (calendarList.update)
   *
   * @param Google_Service_Calendar_CalendarListEntry $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_CalendarListEntry
   */
  public function update($calendarId, Google_Service_Calendar_CalendarListEntry $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Calendar_CalendarListEntry");
  }
  /**
   *  (calendarList.watch)
   *
   * @param Google_Service_Calendar_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_Channel
   */
  public function watch(Google_Service_Calendar_Channel $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), "Google_Service_Calendar_Channel");
  }
}
