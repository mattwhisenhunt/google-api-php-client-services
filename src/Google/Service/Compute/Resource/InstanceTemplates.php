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
 * The "instanceTemplates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $instanceTemplates = $computeService->instanceTemplates;
 *  </code>
 */
class Google_Service_Compute_Resource_InstanceTemplates extends Google_Service_Resource
{
  /**
   *  (instanceTemplates.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $instanceTemplate, $optParams = array())
  {
    $params = array('project' => $project, 'instanceTemplate' => $instanceTemplate);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instanceTemplates.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_InstanceTemplate
   */
  public function get($project, $instanceTemplate, $optParams = array())
  {
    $params = array('project' => $project, 'instanceTemplate' => $instanceTemplate);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_InstanceTemplate");
  }
  /**
   *  (instanceTemplates.insert)
   *
   * @param Google_Service_Compute_InstanceTemplate $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_InstanceTemplate $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (instanceTemplates.listInstanceTemplates)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_InstanceTemplateList
   */
  public function listInstanceTemplates($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_InstanceTemplateList");
  }
}
