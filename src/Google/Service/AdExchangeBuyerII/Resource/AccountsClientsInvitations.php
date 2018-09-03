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
 * The "invitations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyer2Service = new Google_Service_AdExchangeBuyerII(...);
 *   $invitations = $adexchangebuyer2Service->invitations;
 *  </code>
 */
class Google_Service_AdExchangeBuyerII_Resource_AccountsClientsInvitations extends Google_Service_Resource
{
  /**
   *  (invitations.create)
   *
   * @param Google_Service_AdExchangeBuyerII_ClientUserInvitation $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_ClientUserInvitation
   */
  public function create($accountId, $clientAccountId, Google_Service_AdExchangeBuyerII_ClientUserInvitation $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'clientAccountId' => $clientAccountId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_AdExchangeBuyerII_ClientUserInvitation");
  }
  /**
   *  (invitations.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_ClientUserInvitation
   */
  public function get($accountId, $clientAccountId, $invitationId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'clientAccountId' => $clientAccountId, 'invitationId' => $invitationId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AdExchangeBuyerII_ClientUserInvitation");
  }
  /**
   *  (invitations.listAccountsClientsInvitations)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AdExchangeBuyerII_ListClientUserInvitationsResponse
   */
  public function listAccountsClientsInvitations($accountId, $clientAccountId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'clientAccountId' => $clientAccountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AdExchangeBuyerII_ListClientUserInvitationsResponse");
  }
}
