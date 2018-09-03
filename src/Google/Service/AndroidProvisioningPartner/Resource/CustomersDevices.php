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
 * The "devices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androiddeviceprovisioningService = new Google_Service_AndroidProvisioningPartner(...);
 *   $devices = $androiddeviceprovisioningService->devices;
 *  </code>
 */
class Google_Service_AndroidProvisioningPartner_Resource_CustomersDevices extends Google_Service_Resource
{
  /**
   *  (devices.applyConfiguration)
   *
   * @param Google_Service_AndroidProvisioningPartner_CustomerApplyConfigurationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidProvisioningPartner_AndroiddeviceprovisioningEmpty
   */
  public function applyConfiguration($parent, Google_Service_AndroidProvisioningPartner_CustomerApplyConfigurationRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('applyConfiguration', array($params), "Google_Service_AndroidProvisioningPartner_AndroiddeviceprovisioningEmpty");
  }
  /**
   *  (devices.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidProvisioningPartner_Device
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AndroidProvisioningPartner_Device");
  }
  /**
   *  (devices.listCustomersDevices)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AndroidProvisioningPartner_CustomerListDevicesResponse
   */
  public function listCustomersDevices($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AndroidProvisioningPartner_CustomerListDevicesResponse");
  }
  /**
   *  (devices.removeConfiguration)
   *
   * @param Google_Service_AndroidProvisioningPartner_CustomerRemoveConfigurationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidProvisioningPartner_AndroiddeviceprovisioningEmpty
   */
  public function removeConfiguration($parent, Google_Service_AndroidProvisioningPartner_CustomerRemoveConfigurationRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('removeConfiguration', array($params), "Google_Service_AndroidProvisioningPartner_AndroiddeviceprovisioningEmpty");
  }
  /**
   *  (devices.unclaim)
   *
   * @param Google_Service_AndroidProvisioningPartner_CustomerUnclaimDeviceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidProvisioningPartner_AndroiddeviceprovisioningEmpty
   */
  public function unclaim($parent, Google_Service_AndroidProvisioningPartner_CustomerUnclaimDeviceRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('unclaim', array($params), "Google_Service_AndroidProvisioningPartner_AndroiddeviceprovisioningEmpty");
  }
}
