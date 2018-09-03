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
 * The "customers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androiddeviceprovisioningService = new Google_Service_AndroidProvisioningPartner(...);
 *   $customers = $androiddeviceprovisioningService->customers;
 *  </code>
 */
class Google_Service_AndroidProvisioningPartner_Resource_PartnersCustomers extends Google_Service_Resource
{
  /**
   *  (customers.create)
   *
   * @param Google_Service_AndroidProvisioningPartner_CreateCustomerRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidProvisioningPartner_Company
   */
  public function create($parent, Google_Service_AndroidProvisioningPartner_CreateCustomerRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_AndroidProvisioningPartner_Company");
  }
  /**
   *  (customers.listPartnersCustomers)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidProvisioningPartner_ListCustomersResponse
   */
  public function listPartnersCustomers($partnerId, $optParams = array())
  {
    $params = array('partnerId' => $partnerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AndroidProvisioningPartner_ListCustomersResponse");
  }
}
