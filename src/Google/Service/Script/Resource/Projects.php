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
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $scriptService = new Google_Service_Script(...);
 *   $projects = $scriptService->projects;
 *  </code>
 */
class Google_Service_Script_Resource_Projects extends Google_Service_Resource
{
  /**
   *  (projects.create)
   *
   * @param Google_Service_Script_CreateProjectRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_Project
   */
  public function create(Google_Service_Script_CreateProjectRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Script_Project");
  }
  /**
   *  (projects.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_Project
   */
  public function get($scriptId, $optParams = array())
  {
    $params = array('scriptId' => $scriptId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Script_Project");
  }
  /**
   *  (projects.getContent)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Script_Content
   */
  public function getContent($scriptId, $optParams = array())
  {
    $params = array('scriptId' => $scriptId);
    $params = array_merge($params, $optParams);
    return $this->call('getContent', array($params), "Google_Service_Script_Content");
  }
  /**
   *  (projects.getMetrics)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Script_Metrics
   */
  public function getMetrics($scriptId, $optParams = array())
  {
    $params = array('scriptId' => $scriptId);
    $params = array_merge($params, $optParams);
    return $this->call('getMetrics', array($params), "Google_Service_Script_Metrics");
  }
  /**
   *  (projects.updateContent)
   *
   * @param Google_Service_Script_Content $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_Content
   */
  public function updateContent($scriptId, Google_Service_Script_Content $postBody, $optParams = array())
  {
    $params = array('scriptId' => $scriptId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateContent', array($params), "Google_Service_Script_Content");
  }
}
