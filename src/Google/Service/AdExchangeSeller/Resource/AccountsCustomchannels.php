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
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new Google_Service_AdExchangeSeller(...);
 *   $customchannels = $adexchangesellerService->customchannels;
 *  </code>
 */
class Google_Service_AdExchangeSeller_Resource_AccountsCustomchannels extends Google_Service_Resource
{
  /**
   *  (customchannels.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeSeller_CustomChannel
   */
  public function get($accountId, $adClientId, $customChannelId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'customChannelId' => $customChannelId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AdExchangeSeller_CustomChannel");
  }
  /**
   *  (customchannels.listAccountsCustomchannels)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AdExchangeSeller_CustomChannels
   */
  public function listAccountsCustomchannels($accountId, $adClientId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AdExchangeSeller_CustomChannels");
  }
}
