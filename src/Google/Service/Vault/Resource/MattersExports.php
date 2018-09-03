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
 * The "exports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $vaultService = new Google_Service_Vault(...);
 *   $exports = $vaultService->exports;
 *  </code>
 */
class Google_Service_Vault_Resource_MattersExports extends Google_Service_Resource
{
  /**
   *  (exports.create)
   *
   * @param Google_Service_Vault_Export $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_Export
   */
  public function create($matterId, Google_Service_Vault_Export $postBody, $optParams = array())
  {
    $params = array('matterId' => $matterId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Vault_Export");
  }
  /**
   *  (exports.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_VaultEmpty
   */
  public function delete($matterId, $exportId, $optParams = array())
  {
    $params = array('matterId' => $matterId, 'exportId' => $exportId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Vault_VaultEmpty");
  }
  /**
   *  (exports.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_Export
   */
  public function get($matterId, $exportId, $optParams = array())
  {
    $params = array('matterId' => $matterId, 'exportId' => $exportId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Vault_Export");
  }
  /**
   *  (exports.listMattersExports)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Vault_ListExportsResponse
   */
  public function listMattersExports($matterId, $optParams = array())
  {
    $params = array('matterId' => $matterId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Vault_ListExportsResponse");
  }
}
