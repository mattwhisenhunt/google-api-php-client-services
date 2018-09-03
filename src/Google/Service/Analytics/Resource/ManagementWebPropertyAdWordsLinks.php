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
 * The "webPropertyAdWordsLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $webPropertyAdWordsLinks = $analyticsService->webPropertyAdWordsLinks;
 *  </code>
 */
class Google_Service_Analytics_Resource_ManagementWebPropertyAdWordsLinks extends Google_Service_Resource
{
  /**
   *  (webPropertyAdWordsLinks.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($accountId, $webPropertyId, $webPropertyAdWordsLinkId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (webPropertyAdWordsLinks.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_EntityAdWordsLink
   */
  public function get($accountId, $webPropertyId, $webPropertyAdWordsLinkId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Analytics_EntityAdWordsLink");
  }
  /**
   *  (webPropertyAdWordsLinks.insert)
   *
   * @param Google_Service_Analytics_EntityAdWordsLink $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_EntityAdWordsLink
   */
  public function insert($accountId, $webPropertyId, Google_Service_Analytics_EntityAdWordsLink $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Analytics_EntityAdWordsLink");
  }
  /**
   *  (webPropertyAdWordsLinks.listManagementWebPropertyAdWordsLinks)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Analytics_EntityAdWordsLinks
   */
  public function listManagementWebPropertyAdWordsLinks($accountId, $webPropertyId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Analytics_EntityAdWordsLinks");
  }
  /**
   *  (webPropertyAdWordsLinks.patch)
   *
   * @param Google_Service_Analytics_EntityAdWordsLink $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_EntityAdWordsLink
   */
  public function patch($accountId, $webPropertyId, $webPropertyAdWordsLinkId, Google_Service_Analytics_EntityAdWordsLink $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Analytics_EntityAdWordsLink");
  }
  /**
   *  (webPropertyAdWordsLinks.update)
   *
   * @param Google_Service_Analytics_EntityAdWordsLink $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_EntityAdWordsLink
   */
  public function update($accountId, $webPropertyId, $webPropertyAdWordsLinkId, Google_Service_Analytics_EntityAdWordsLink $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Analytics_EntityAdWordsLink");
  }
}
