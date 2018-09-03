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
 * The "enterprises" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $enterprises = $androidenterpriseService->enterprises;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Resource_Enterprises extends Google_Service_Resource
{
  /**
   *  (enterprises.acknowledgeNotificationSet)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function acknowledgeNotificationSet($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('acknowledgeNotificationSet', array($params));
  }
  /**
   *  (enterprises.completeSignup)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AndroidEnterprise_Enterprise
   */
  public function completeSignup($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('completeSignup', array($params), "Google_Service_AndroidEnterprise_Enterprise");
  }
  /**
   *  (enterprises.createWebToken)
   *
   * @param Google_Service_AndroidEnterprise_AdministratorWebTokenSpec $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_AdministratorWebToken
   */
  public function createWebToken($enterpriseId, Google_Service_AndroidEnterprise_AdministratorWebTokenSpec $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createWebToken', array($params), "Google_Service_AndroidEnterprise_AdministratorWebToken");
  }
  /**
   *  (enterprises.enroll)
   *
   * @param Google_Service_AndroidEnterprise_Enterprise $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_Enterprise
   */
  public function enroll($token, Google_Service_AndroidEnterprise_Enterprise $postBody, $optParams = array())
  {
    $params = array('token' => $token ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('enroll', array($params), "Google_Service_AndroidEnterprise_Enterprise");
  }
  /**
   *  (enterprises.generateSignupUrl)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AndroidEnterprise_SignupInfo
   */
  public function generateSignupUrl($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('generateSignupUrl', array($params), "Google_Service_AndroidEnterprise_SignupInfo");
  }
  /**
   *  (enterprises.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_Enterprise
   */
  public function get($enterpriseId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AndroidEnterprise_Enterprise");
  }
  /**
   *  (enterprises.getAndroidDevicePolicyConfig)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_AndroidDevicePolicyConfig
   */
  public function getAndroidDevicePolicyConfig($enterpriseId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId);
    $params = array_merge($params, $optParams);
    return $this->call('getAndroidDevicePolicyConfig', array($params), "Google_Service_AndroidEnterprise_AndroidDevicePolicyConfig");
  }
  /**
   *  (enterprises.getServiceAccount)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AndroidEnterprise_ServiceAccount
   */
  public function getServiceAccount($enterpriseId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId);
    $params = array_merge($params, $optParams);
    return $this->call('getServiceAccount', array($params), "Google_Service_AndroidEnterprise_ServiceAccount");
  }
  /**
   *  (enterprises.getStoreLayout)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_StoreLayout
   */
  public function getStoreLayout($enterpriseId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId);
    $params = array_merge($params, $optParams);
    return $this->call('getStoreLayout', array($params), "Google_Service_AndroidEnterprise_StoreLayout");
  }
  /**
   *  (enterprises.listEnterprises)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_EnterprisesListResponse
   */
  public function listEnterprises($domain, $optParams = array())
  {
    $params = array('domain' => $domain);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AndroidEnterprise_EnterprisesListResponse");
  }
  /**
   *  (enterprises.pullNotificationSet)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AndroidEnterprise_NotificationSet
   */
  public function pullNotificationSet($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('pullNotificationSet', array($params), "Google_Service_AndroidEnterprise_NotificationSet");
  }
  /**
   *  (enterprises.sendTestPushNotification)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_EnterprisesSendTestPushNotificationResponse
   */
  public function sendTestPushNotification($enterpriseId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId);
    $params = array_merge($params, $optParams);
    return $this->call('sendTestPushNotification', array($params), "Google_Service_AndroidEnterprise_EnterprisesSendTestPushNotificationResponse");
  }
  /**
   *  (enterprises.setAccount)
   *
   * @param Google_Service_AndroidEnterprise_EnterpriseAccount $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_EnterpriseAccount
   */
  public function setAccount($enterpriseId, Google_Service_AndroidEnterprise_EnterpriseAccount $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setAccount', array($params), "Google_Service_AndroidEnterprise_EnterpriseAccount");
  }
  /**
   *  (enterprises.setAndroidDevicePolicyConfig)
   *
   * @param Google_Service_AndroidEnterprise_AndroidDevicePolicyConfig $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_AndroidDevicePolicyConfig
   */
  public function setAndroidDevicePolicyConfig($enterpriseId, Google_Service_AndroidEnterprise_AndroidDevicePolicyConfig $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setAndroidDevicePolicyConfig', array($params), "Google_Service_AndroidEnterprise_AndroidDevicePolicyConfig");
  }
  /**
   *  (enterprises.setStoreLayout)
   *
   * @param Google_Service_AndroidEnterprise_StoreLayout $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_StoreLayout
   */
  public function setStoreLayout($enterpriseId, Google_Service_AndroidEnterprise_StoreLayout $postBody, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setStoreLayout', array($params), "Google_Service_AndroidEnterprise_StoreLayout");
  }
  /**
   *  (enterprises.unenroll)
   *
   * @param array $optParams Optional parameters.

   */
  public function unenroll($enterpriseId, $optParams = array())
  {
    $params = array('enterpriseId' => $enterpriseId);
    $params = array_merge($params, $optParams);
    return $this->call('unenroll', array($params));
  }
}
