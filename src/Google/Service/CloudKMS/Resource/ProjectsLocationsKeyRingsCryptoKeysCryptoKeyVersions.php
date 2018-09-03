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
 * The "cryptoKeyVersions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudkmsService = new Google_Service_CloudKMS(...);
 *   $cryptoKeyVersions = $cloudkmsService->cryptoKeyVersions;
 *  </code>
 */
class Google_Service_CloudKMS_Resource_ProjectsLocationsKeyRingsCryptoKeysCryptoKeyVersions extends Google_Service_Resource
{
  /**
   *  (cryptoKeyVersions.asymmetricDecrypt)
   *
   * @param Google_Service_CloudKMS_AsymmetricDecryptRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_AsymmetricDecryptResponse
   */
  public function asymmetricDecrypt($name, Google_Service_CloudKMS_AsymmetricDecryptRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('asymmetricDecrypt', array($params), "Google_Service_CloudKMS_AsymmetricDecryptResponse");
  }
  /**
   *  (cryptoKeyVersions.asymmetricSign)
   *
   * @param Google_Service_CloudKMS_AsymmetricSignRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_AsymmetricSignResponse
   */
  public function asymmetricSign($name, Google_Service_CloudKMS_AsymmetricSignRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('asymmetricSign', array($params), "Google_Service_CloudKMS_AsymmetricSignResponse");
  }
  /**
   *  (cryptoKeyVersions.create)
   *
   * @param Google_Service_CloudKMS_CryptoKeyVersion $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_CryptoKeyVersion
   */
  public function create($parent, Google_Service_CloudKMS_CryptoKeyVersion $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudKMS_CryptoKeyVersion");
  }
  /**
   *  (cryptoKeyVersions.destroy)
   *
   * @param Google_Service_CloudKMS_DestroyCryptoKeyVersionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_CryptoKeyVersion
   */
  public function destroy($name, Google_Service_CloudKMS_DestroyCryptoKeyVersionRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('destroy', array($params), "Google_Service_CloudKMS_CryptoKeyVersion");
  }
  /**
   *  (cryptoKeyVersions.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_CryptoKeyVersion
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudKMS_CryptoKeyVersion");
  }
  /**
   *  (cryptoKeyVersions.getPublicKey)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_PublicKey
   */
  public function getPublicKey($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getPublicKey', array($params), "Google_Service_CloudKMS_PublicKey");
  }
  /**
   *  (cryptoKeyVersions.listProjectsLocationsKeyRingsCryptoKeysCryptoKeyVersions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudKMS_ListCryptoKeyVersionsResponse
   */
  public function listProjectsLocationsKeyRingsCryptoKeysCryptoKeyVersions($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudKMS_ListCryptoKeyVersionsResponse");
  }
  /**
   *  (cryptoKeyVersions.patch)
   *
   * @param Google_Service_CloudKMS_CryptoKeyVersion $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudKMS_CryptoKeyVersion
   */
  public function patch($name, Google_Service_CloudKMS_CryptoKeyVersion $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudKMS_CryptoKeyVersion");
  }
  /**
   *  (cryptoKeyVersions.restore)
   *
   * @param Google_Service_CloudKMS_RestoreCryptoKeyVersionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudKMS_CryptoKeyVersion
   */
  public function restore($name, Google_Service_CloudKMS_RestoreCryptoKeyVersionRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('restore', array($params), "Google_Service_CloudKMS_CryptoKeyVersion");
  }
}
