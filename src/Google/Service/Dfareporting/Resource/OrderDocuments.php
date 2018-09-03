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
 * The "orderDocuments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_Service_Dfareporting(...);
 *   $orderDocuments = $dfareportingService->orderDocuments;
 *  </code>
 */
class Google_Service_Dfareporting_Resource_OrderDocuments extends Google_Service_Resource
{
  /**
   *  (orderDocuments.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_OrderDocument
   */
  public function get($profileId, $projectId, $id, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'projectId' => $projectId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Dfareporting_OrderDocument");
  }
  /**
   *  (orderDocuments.listOrderDocuments)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dfareporting_OrderDocumentsListResponse
   */
  public function listOrderDocuments($profileId, $projectId, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'projectId' => $projectId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dfareporting_OrderDocumentsListResponse");
  }
}
