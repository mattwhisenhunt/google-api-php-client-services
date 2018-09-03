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
 * The "sendAs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Google_Service_Gmail(...);
 *   $sendAs = $gmailService->sendAs;
 *  </code>
 */
class Google_Service_Gmail_Resource_UsersSettingsSendAs extends Google_Service_Resource
{
  /**
   *  (sendAs.create)
   *
   * @param Google_Service_Gmail_SendAs $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_SendAs
   */
  public function create($userId, Google_Service_Gmail_SendAs $postBody, $optParams = array())
  {
    $params = array('userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Gmail_SendAs");
  }
  /**
   *  (sendAs.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($userId, $sendAsEmail, $optParams = array())
  {
    $params = array('userId' => $userId, 'sendAsEmail' => $sendAsEmail);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (sendAs.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_SendAs
   */
  public function get($userId, $sendAsEmail, $optParams = array())
  {
    $params = array('userId' => $userId, 'sendAsEmail' => $sendAsEmail);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Gmail_SendAs");
  }
  /**
   *  (sendAs.listUsersSettingsSendAs)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_ListSendAsResponse
   */
  public function listUsersSettingsSendAs($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Gmail_ListSendAsResponse");
  }
  /**
   *  (sendAs.patch)
   *
   * @param Google_Service_Gmail_SendAs $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_SendAs
   */
  public function patch($userId, $sendAsEmail, Google_Service_Gmail_SendAs $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'sendAsEmail' => $sendAsEmail ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Gmail_SendAs");
  }
  /**
   *  (sendAs.update)
   *
   * @param Google_Service_Gmail_SendAs $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_SendAs
   */
  public function update($userId, $sendAsEmail, Google_Service_Gmail_SendAs $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'sendAsEmail' => $sendAsEmail ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Gmail_SendAs");
  }
  /**
   *  (sendAs.verify)
   *
   * @param array $optParams Optional parameters.

   */
  public function verify($userId, $sendAsEmail, $optParams = array())
  {
    $params = array('userId' => $userId, 'sendAsEmail' => $sendAsEmail);
    $params = array_merge($params, $optParams);
    return $this->call('verify', array($params));
  }
}
