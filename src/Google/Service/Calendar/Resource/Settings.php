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
 * The "settings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $settings = $calendarService->settings;
 *  </code>
 */
class Google_Service_Calendar_Resource_Settings extends Google_Service_Resource
{
  /**
   *  (settings.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Calendar_Setting
   */
  public function get($setting, $optParams = array())
  {
    $params = array('setting' => $setting);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Calendar_Setting");
  }
  /**
   *  (settings.listSettings)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_Settings
   */
  public function listSettings($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Calendar_Settings");
  }
  /**
   *  (settings.watch)
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
