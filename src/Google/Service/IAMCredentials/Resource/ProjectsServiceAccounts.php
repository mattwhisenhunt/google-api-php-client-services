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
 * The "serviceAccounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $iamcredentialsService = new Google_Service_IAMCredentials(...);
 *   $serviceAccounts = $iamcredentialsService->serviceAccounts;
 *  </code>
 */
class Google_Service_IAMCredentials_Resource_ProjectsServiceAccounts extends Google_Service_Resource
{
  /**
   *  (serviceAccounts.generateAccessToken)
   *
   * @param Google_Service_IAMCredentials_GenerateAccessTokenRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_IAMCredentials_GenerateAccessTokenResponse
   */
  public function generateAccessToken($name, Google_Service_IAMCredentials_GenerateAccessTokenRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('generateAccessToken', array($params), "Google_Service_IAMCredentials_GenerateAccessTokenResponse");
  }
  /**
   *  (serviceAccounts.generateIdToken)
   *
   * @param Google_Service_IAMCredentials_GenerateIdTokenRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_IAMCredentials_GenerateIdTokenResponse
   */
  public function generateIdToken($name, Google_Service_IAMCredentials_GenerateIdTokenRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('generateIdToken', array($params), "Google_Service_IAMCredentials_GenerateIdTokenResponse");
  }
  /**
   *  (serviceAccounts.generateIdentityBindingAccessToken)
   *
   * @param Google_Service_IAMCredentials_GenerateIdentityBindingAccessTokenRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_IAMCredentials_GenerateIdentityBindingAccessTokenResponse
   */
  public function generateIdentityBindingAccessToken($name, Google_Service_IAMCredentials_GenerateIdentityBindingAccessTokenRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('generateIdentityBindingAccessToken', array($params), "Google_Service_IAMCredentials_GenerateIdentityBindingAccessTokenResponse");
  }
  /**
   *  (serviceAccounts.signBlob)
   *
   * @param Google_Service_IAMCredentials_SignBlobRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_IAMCredentials_SignBlobResponse
   */
  public function signBlob($name, Google_Service_IAMCredentials_SignBlobRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('signBlob', array($params), "Google_Service_IAMCredentials_SignBlobResponse");
  }
  /**
   *  (serviceAccounts.signJwt)
   *
   * @param Google_Service_IAMCredentials_SignJwtRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_IAMCredentials_SignJwtResponse
   */
  public function signJwt($name, Google_Service_IAMCredentials_SignJwtRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('signJwt', array($params), "Google_Service_IAMCredentials_SignJwtResponse");
  }
}
