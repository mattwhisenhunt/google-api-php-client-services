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
 * The "events" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $events = $calendarService->events;
 *  </code>
 */
class Google_Service_Calendar_Resource_Events extends Google_Service_Resource
{
  /**
   *  (events.delete)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function delete($calendarId, $eventId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'eventId' => $eventId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (events.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_Event
   */
  public function get($calendarId, $eventId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'eventId' => $eventId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Calendar_Event");
  }
  /**
   *  (events.import)
   *
   * @param Google_Service_Calendar_Event $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_Event
   */
  public function import($calendarId, Google_Service_Calendar_Event $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('import', array($params), "Google_Service_Calendar_Event");
  }
  /**
   *  (events.insert)
   *
   * @param Google_Service_Calendar_Event $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_Event
   */
  public function insert($calendarId, Google_Service_Calendar_Event $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Calendar_Event");
  }
  /**
   *  (events.instances)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_Events
   */
  public function instances($calendarId, $eventId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'eventId' => $eventId);
    $params = array_merge($params, $optParams);
    return $this->call('instances', array($params), "Google_Service_Calendar_Events");
  }
  /**
   *  (events.listEvents)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_Events
   */
  public function listEvents($calendarId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Calendar_Events");
  }
  /**
   *  (events.move)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_Event
   */
  public function move($calendarId, $eventId, $destination, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'eventId' => $eventId, 'destination' => $destination);
    $params = array_merge($params, $optParams);
    return $this->call('move', array($params), "Google_Service_Calendar_Event");
  }
  /**
   *  (events.patch)
   *
   * @param Google_Service_Calendar_Event $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_Event
   */
  public function patch($calendarId, $eventId, Google_Service_Calendar_Event $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'eventId' => $eventId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Calendar_Event");
  }
  /**
   *  (events.quickAdd)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_Event
   */
  public function quickAdd($calendarId, $text, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'text' => $text);
    $params = array_merge($params, $optParams);
    return $this->call('quickAdd', array($params), "Google_Service_Calendar_Event");
  }
  /**
   *  (events.update)
   *
   * @param Google_Service_Calendar_Event $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_Event
   */
  public function update($calendarId, $eventId, Google_Service_Calendar_Event $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'eventId' => $eventId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Calendar_Event");
  }
  /**
   *  (events.watch)
   *
   * @param Google_Service_Calendar_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_Channel
   */
  public function watch($calendarId, Google_Service_Calendar_Channel $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), "Google_Service_Calendar_Channel");
  }
}
