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
 * The "v1" collection of methods.
 * Typical usage is:
 *  <code>
 *   $firebasedynamiclinksService = new Google_Service_FirebaseDynamicLinks(...);
 *   $v1 = $firebasedynamiclinksService->v1;
 *  </code>
 */
class Google_Service_FirebaseDynamicLinks_Resource_V1 extends Google_Service_Resource
{
  /**
   *  (v1.getLinkStats)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_FirebaseDynamicLinks_DynamicLinkStats
   */
  public function getLinkStats($dynamicLink, $optParams = array())
  {
    $params = array('dynamicLink' => $dynamicLink);
    $params = array_merge($params, $optParams);
    return $this->call('getLinkStats', array($params), "Google_Service_FirebaseDynamicLinks_DynamicLinkStats");
  }
  /**
   *  (v1.installAttribution)
   *
   * @param Google_Service_FirebaseDynamicLinks_GetIosPostInstallAttributionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_FirebaseDynamicLinks_GetIosPostInstallAttributionResponse
   */
  public function installAttribution(Google_Service_FirebaseDynamicLinks_GetIosPostInstallAttributionRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('installAttribution', array($params), "Google_Service_FirebaseDynamicLinks_GetIosPostInstallAttributionResponse");
  }
  /**
   *  (v1.reopenAttribution)
   *
   * @param Google_Service_FirebaseDynamicLinks_GetIosReopenAttributionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_FirebaseDynamicLinks_GetIosReopenAttributionResponse
   */
  public function reopenAttribution(Google_Service_FirebaseDynamicLinks_GetIosReopenAttributionRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reopenAttribution', array($params), "Google_Service_FirebaseDynamicLinks_GetIosReopenAttributionResponse");
  }
}
