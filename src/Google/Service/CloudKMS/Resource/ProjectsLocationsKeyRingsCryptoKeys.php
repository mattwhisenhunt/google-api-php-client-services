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
 * The "cryptoKeys" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudkmsService = new Google_Service_CloudKMS(...);
 *   $cryptoKeys = $cloudkmsService->cryptoKeys;
 *  </code>
 */
class Google_Service_CloudKMS_Resource_ProjectsLocationsKeyRingsCryptoKeys extends Google_Service_Resource
{
  /**
   *  (cryptoKeys.create)
   *
   * @param Google_Service_CloudKMS_CryptoKey $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudKMS_CryptoKey
   */
  public function create($parent, Google_Service_CloudKMS_CryptoKey $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudKMS_CryptoKey");
  }
  /**
   *  (cryptoKeys.decrypt)
   *
   * @param Google_Service_CloudKMS_DecryptRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_DecryptResponse
   */
  public function decrypt($name, Google_Service_CloudKMS_DecryptRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('decrypt', array($params), "Google_Service_CloudKMS_DecryptResponse");
  }
  /**
   *  (cryptoKeys.encrypt)
   *
   * @param Google_Service_CloudKMS_EncryptRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_EncryptResponse
   */
  public function encrypt($name, Google_Service_CloudKMS_EncryptRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('encrypt', array($params), "Google_Service_CloudKMS_EncryptResponse");
  }
  /**
   *  (cryptoKeys.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_CryptoKey
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudKMS_CryptoKey");
  }
  /**
   *  (cryptoKeys.getIamPolicy)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_Policy
   */
  public function getIamPolicy($resource, $optParams = array())
  {
    $params = array('resource' => $resource);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_CloudKMS_Policy");
  }
  /**
   *  (cryptoKeys.listProjectsLocationsKeyRingsCryptoKeys)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudKMS_ListCryptoKeysResponse
   */
  public function listProjectsLocationsKeyRingsCryptoKeys($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudKMS_ListCryptoKeysResponse");
  }
  /**
   *  (cryptoKeys.patch)
   *
   * @param Google_Service_CloudKMS_CryptoKey $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudKMS_CryptoKey
   */
  public function patch($name, Google_Service_CloudKMS_CryptoKey $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudKMS_CryptoKey");
  }
  /**
   *  (cryptoKeys.setIamPolicy)
   *
   * @param Google_Service_CloudKMS_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_Policy
   */
  public function setIamPolicy($resource, Google_Service_CloudKMS_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_CloudKMS_Policy");
  }
  /**
   *  (cryptoKeys.testIamPermissions)
   *
   * @param Google_Service_CloudKMS_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_CloudKMS_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_CloudKMS_TestIamPermissionsResponse");
  }
  /**
   *  (cryptoKeys.updatePrimaryVersion)
   *
   * @param Google_Service_CloudKMS_UpdateCryptoKeyPrimaryVersionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_CryptoKey
   */
  public function updatePrimaryVersion($name, Google_Service_CloudKMS_UpdateCryptoKeyPrimaryVersionRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updatePrimaryVersion', array($params), "Google_Service_CloudKMS_CryptoKey");
  }
}
