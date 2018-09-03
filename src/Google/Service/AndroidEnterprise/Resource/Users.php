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
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $users = $androidenterpriseService->users;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Resource_Users extends Google_Service_Resource
{
  /**
   *  (users.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($enterpriseId, $userId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (users.generateAuthenticationToken)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_AuthenticationToken
   */
  public function generateAuthenticationToken($enterpriseId, $userId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('generateAuthenticationToken', array($params), "Google_Service_AndroidEnterprise_AuthenticationToken");
  }
  /**
   *  (users.generateToken)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_UserToken
   */
  public function generateToken($enterpriseId, $userId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('generateToken', array($params), "Google_Service_AndroidEnterprise_UserToken");
  }
  /**
   *  (users.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_User
   */
  public function get($enterpriseId, $userId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AndroidEnterprise_User");
  }
  /**
   *  (users.getAvailableProductSet)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_ProductSet
   */
  public function getAvailableProductSet($enterpriseId, $userId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('getAvailableProductSet', array($params), "Google_Service_AndroidEnterprise_ProductSet");
  }
  /**
   *  (users.insert)
   *
   * @param Google_Service_AndroidEnterprise_User $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_User
   */
  public function insert($enterpriseId, Google_Service_AndroidEnterprise_User $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_AndroidEnterprise_User");
  }
  /**
   *  (users.listUsers)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_UsersListResponse
   */
  public function listUsers($enterpriseId, $email, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'email' => $email);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AndroidEnterprise_UsersListResponse");
  }
  /**
   *  (users.patch)
   *
   * @param Google_Service_AndroidEnterprise_User $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_User
   */
  public function patch($enterpriseId, $userId, Google_Service_AndroidEnterprise_User $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_AndroidEnterprise_User");
  }
  /**
   *  (users.revokeDeviceAccess)
   *
   * @param array $optParams Optional parameters.

   */
  public function revokeDeviceAccess($enterpriseId, $userId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('revokeDeviceAccess', array($params));
  }
  /**
   *  (users.revokeToken)
   *
   * @param array $optParams Optional parameters.

   */
  public function revokeToken($enterpriseId, $userId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('revokeToken', array($params));
  }
  /**
   *  (users.setAvailableProductSet)
   *
   * @param Google_Service_AndroidEnterprise_ProductSet $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_ProductSet
   */
  public function setAvailableProductSet($enterpriseId, $userId, Google_Service_AndroidEnterprise_ProductSet $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setAvailableProductSet', array($params), "Google_Service_AndroidEnterprise_ProductSet");
  }
  /**
   *  (users.update)
   *
   * @param Google_Service_AndroidEnterprise_User $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_User
   */
  public function update($enterpriseId, $userId, Google_Service_AndroidEnterprise_User $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_AndroidEnterprise_User");
  }
}
