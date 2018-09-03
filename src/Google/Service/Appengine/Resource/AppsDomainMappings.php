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
 * The "domainMappings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google_Service_Appengine(...);
 *   $domainMappings = $appengineService->domainMappings;
 *  </code>
 */
class Google_Service_Appengine_Resource_AppsDomainMappings extends Google_Service_Resource
{
  /**
   *  (domainMappings.create)
   *
   * @param Google_Service_Appengine_DomainMapping $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Appengine_Operation
   */
  public function create($appsId, Google_Service_Appengine_DomainMapping $postBody, $optParams = array())
  {
    $params = array('appsId' => $appsId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Appengine_Operation");
  }
  /**
   *  (domainMappings.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_Operation
   */
  public function delete($appsId, $domainMappingsId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'domainMappingsId' => $domainMappingsId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Appengine_Operation");
  }
  /**
   *  (domainMappings.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_DomainMapping
   */
  public function get($appsId, $domainMappingsId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'domainMappingsId' => $domainMappingsId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Appengine_DomainMapping");
  }
  /**
   *  (domainMappings.listAppsDomainMappings)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Appengine_ListDomainMappingsResponse
   */
  public function listAppsDomainMappings($appsId, $optParams = array())
  {
    $params = array('appsId' => $appsId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Appengine_ListDomainMappingsResponse");
  }
  /**
   *  (domainMappings.patch)
   *
   * @param Google_Service_Appengine_DomainMapping $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Appengine_Operation
   */
  public function patch($appsId, $domainMappingsId, Google_Service_Appengine_DomainMapping $postBody, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'domainMappingsId' => $domainMappingsId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Appengine_Operation");
  }
}
