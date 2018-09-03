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
 * The "acl" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $acl = $calendarService->acl;
 *  </code>
 */
class Google_Service_Calendar_Resource_Acl extends Google_Service_Resource
{
  /**
   *  (acl.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($calendarId, $ruleId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (acl.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Calendar_AclRule
   */
  public function get($calendarId, $ruleId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Calendar_AclRule");
  }
  /**
   *  (acl.insert)
   *
   * @param Google_Service_Calendar_AclRule $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_AclRule
   */
  public function insert($calendarId, Google_Service_Calendar_AclRule $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Calendar_AclRule");
  }
  /**
   *  (acl.listAcl)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_Acl
   */
  public function listAcl($calendarId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Calendar_Acl");
  }
  /**
   *  (acl.patch)
   *
   * @param Google_Service_Calendar_AclRule $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_AclRule
   */
  public function patch($calendarId, $ruleId, Google_Service_Calendar_AclRule $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Calendar_AclRule");
  }
  /**
   *  (acl.update)
   *
   * @param Google_Service_Calendar_AclRule $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Calendar_AclRule
   */
  public function update($calendarId, $ruleId, Google_Service_Calendar_AclRule $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Calendar_AclRule");
  }
  /**
   *  (acl.watch)
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
