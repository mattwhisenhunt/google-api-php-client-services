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
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $vaultService = new Google_Service_Vault(...);
 *   $accounts = $vaultService->accounts;
 *  </code>
 */
class Google_Service_Vault_Resource_MattersHoldsAccounts extends Google_Service_Resource
{
  /**
   *  (accounts.create)
   *
   * @param Google_Service_Vault_HeldAccount $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_HeldAccount
   */
  public function create($matterId, $holdId, Google_Service_Vault_HeldAccount $postBody, $optParams = array())
  {
    $params = array('matterId' => $matterId, 'holdId' => $holdId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Vault_HeldAccount");
  }
  /**
   *  (accounts.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_VaultEmpty
   */
  public function delete($matterId, $holdId, $accountId, $optParams = array())
  {
    $params = array('matterId' => $matterId, 'holdId' => $holdId, 'accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Vault_VaultEmpty");
  }
  /**
   *  (accounts.listMattersHoldsAccounts)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_ListHeldAccountsResponse
   */
  public function listMattersHoldsAccounts($matterId, $holdId, $optParams = array())
  {
    $params = array('matterId' => $matterId, 'holdId' => $holdId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Vault_ListHeldAccountsResponse");
  }
}
