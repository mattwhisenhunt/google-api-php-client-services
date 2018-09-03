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
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $projects = $bigqueryService->projects;
 *  </code>
 */
class Google_Service_Bigquery_Resource_Projects extends Google_Service_Resource
{
  /**
   *  (projects.getServiceAccount)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Bigquery_GetServiceAccountResponse
   */
  public function getServiceAccount($projectId, $optParams = array())
  {
    $params = array('projectId' => $projectId);
    $params = array_merge($params, $optParams);
    return $this->call('getServiceAccount', array($params), "Google_Service_Bigquery_GetServiceAccountResponse");
  }
  /**
   *  (projects.listProjects)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Bigquery_ProjectList
   */
  public function listProjects($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Bigquery_ProjectList");
  }
}
