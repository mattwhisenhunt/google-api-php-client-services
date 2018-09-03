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
 * The "holds" collection of methods.
 * Typical usage is:
 *  <code>
 *   $vaultService = new Google_Service_Vault(...);
 *   $holds = $vaultService->holds;
 *  </code>
 */
class Google_Service_Vault_Resource_MattersHolds extends Google_Service_Resource
{
  /**
   *  (holds.addHeldAccounts)
   *
   * @param Google_Service_Vault_AddHeldAccountsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_AddHeldAccountsResponse
   */
  public function addHeldAccounts($matterId, $holdId, Google_Service_Vault_AddHeldAccountsRequest $postBody, $optParams = array())
  {
    $params = array('matterId' => $matterId, 'holdId' => $holdId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addHeldAccounts', array($params), "Google_Service_Vault_AddHeldAccountsResponse");
  }
  /**
   *  (holds.create)
   *
   * @param Google_Service_Vault_Hold $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_Hold
   */
  public function create($matterId, Google_Service_Vault_Hold $postBody, $optParams = array())
  {
    $params = array('matterId' => $matterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Vault_Hold");
  }
  /**
   *  (holds.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_VaultEmpty
   */
  public function delete($matterId, $holdId, $optParams = array())
  {
    $params = array('matterId' => $matterId, 'holdId' => $holdId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Vault_VaultEmpty");
  }
  /**
   *  (holds.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Vault_Hold
   */
  public function get($matterId, $holdId, $optParams = array())
  {
    $params = array('matterId' => $matterId, 'holdId' => $holdId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Vault_Hold");
  }
  /**
   *  (holds.listMattersHolds)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Vault_ListHoldsResponse
   */
  public function listMattersHolds($matterId, $optParams = array())
  {
    $params = array('matterId' => $matterId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Vault_ListHoldsResponse");
  }
  /**
   *  (holds.removeHeldAccounts)
   *
   * @param Google_Service_Vault_RemoveHeldAccountsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_RemoveHeldAccountsResponse
   */
  public function removeHeldAccounts($matterId, $holdId, Google_Service_Vault_RemoveHeldAccountsRequest $postBody, $optParams = array())
  {
    $params = array('matterId' => $matterId, 'holdId' => $holdId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('removeHeldAccounts', array($params), "Google_Service_Vault_RemoveHeldAccountsResponse");
  }
  /**
   *  (holds.update)
   *
   * @param Google_Service_Vault_Hold $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_Hold
   */
  public function update($matterId, $holdId, Google_Service_Vault_Hold $postBody, $optParams = array())
  {
    $params = array('matterId' => $matterId, 'holdId' => $holdId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Vault_Hold");
  }
}
