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
 * The "smimeInfo" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Google_Service_Gmail(...);
 *   $smimeInfo = $gmailService->smimeInfo;
 *  </code>
 */
class Google_Service_Gmail_Resource_UsersSettingsSendAsSmimeInfo extends Google_Service_Resource
{
  /**
   *  (smimeInfo.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($userId, $sendAsEmail, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'sendAsEmail' => $sendAsEmail, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (smimeInfo.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_SmimeInfo
   */
  public function get($userId, $sendAsEmail, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'sendAsEmail' => $sendAsEmail, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Gmail_SmimeInfo");
  }
  /**
   *  (smimeInfo.insert)
   *
   * @param Google_Service_Gmail_SmimeInfo $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_SmimeInfo
   */
  public function insert($userId, $sendAsEmail, Google_Service_Gmail_SmimeInfo $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'sendAsEmail' => $sendAsEmail ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Gmail_SmimeInfo");
  }
  /**
   *  (smimeInfo.listUsersSettingsSendAsSmimeInfo)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_ListSmimeInfoResponse
   */
  public function listUsersSettingsSendAsSmimeInfo($userId, $sendAsEmail, $optParams = array())
  {
    $params = array('userId' => $userId, 'sendAsEmail' => $sendAsEmail);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Gmail_ListSmimeInfoResponse");
  }
  /**
   *  (smimeInfo.setDefault)
   *
   * @param array $optParams Optional parameters.

   */
  public function setDefault($userId, $sendAsEmail, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'sendAsEmail' => $sendAsEmail, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('setDefault', array($params));
  }
}
