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
 * The "remarketingAudience" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $remarketingAudience = $analyticsService->remarketingAudience;
 *  </code>
 */
class Google_Service_Analytics_Resource_ManagementRemarketingAudience extends Google_Service_Resource
{
  /**
   *  (remarketingAudience.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($accountId, $webPropertyId, $remarketingAudienceId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'remarketingAudienceId' => $remarketingAudienceId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (remarketingAudience.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_RemarketingAudience
   */
  public function get($accountId, $webPropertyId, $remarketingAudienceId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'remarketingAudienceId' => $remarketingAudienceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Analytics_RemarketingAudience");
  }
  /**
   *  (remarketingAudience.insert)
   *
   * @param Google_Service_Analytics_RemarketingAudience $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_RemarketingAudience
   */
  public function insert($accountId, $webPropertyId, Google_Service_Analytics_RemarketingAudience $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Analytics_RemarketingAudience");
  }
  /**
   *  (remarketingAudience.listManagementRemarketingAudience)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Analytics_RemarketingAudiences
   */
  public function listManagementRemarketingAudience($accountId, $webPropertyId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Analytics_RemarketingAudiences");
  }
  /**
   *  (remarketingAudience.patch)
   *
   * @param Google_Service_Analytics_RemarketingAudience $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_RemarketingAudience
   */
  public function patch($accountId, $webPropertyId, $remarketingAudienceId, Google_Service_Analytics_RemarketingAudience $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'remarketingAudienceId' => $remarketingAudienceId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Analytics_RemarketingAudience");
  }
  /**
   *  (remarketingAudience.update)
   *
   * @param Google_Service_Analytics_RemarketingAudience $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_RemarketingAudience
   */
  public function update($accountId, $webPropertyId, $remarketingAudienceId, Google_Service_Analytics_RemarketingAudience $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'remarketingAudienceId' => $remarketingAudienceId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Analytics_RemarketingAudience");
  }
}
