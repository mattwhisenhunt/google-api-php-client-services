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
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyer2Service = new Google_Service_AdExchangeBuyerII(...);
 *   $users = $adexchangebuyer2Service->users;
 *  </code>
 */
class Google_Service_AdExchangeBuyerII_Resource_AccountsClientsUsers extends Google_Service_Resource
{
  /**
   *  (users.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_ClientUser
   */
  public function get($accountId, $clientAccountId, $userId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'clientAccountId' => $clientAccountId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AdExchangeBuyerII_ClientUser");
  }
  /**
   *  (users.listAccountsClientsUsers)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AdExchangeBuyerII_ListClientUsersResponse
   */
  public function listAccountsClientsUsers($accountId, $clientAccountId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'clientAccountId' => $clientAccountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AdExchangeBuyerII_ListClientUsersResponse");
  }
  /**
   *  (users.update)
   *
   * @param Google_Service_AdExchangeBuyerII_ClientUser $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_ClientUser
   */
  public function update($accountId, $clientAccountId, $userId, Google_Service_AdExchangeBuyerII_ClientUser $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'clientAccountId' => $clientAccountId, 'userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_AdExchangeBuyerII_ClientUser");
  }
}
