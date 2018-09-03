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
 * The "nodeTemplates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $nodeTemplates = $computeService->nodeTemplates;
 *  </code>
 */
class Google_Service_Compute_Resource_NodeTemplates extends Google_Service_Resource
{
  /**
   *  (nodeTemplates.aggregatedList)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_NodeTemplateAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), "Google_Service_Compute_NodeTemplateAggregatedList");
  }
  /**
   *  (nodeTemplates.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $region, $nodeTemplate, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'nodeTemplate' => $nodeTemplate);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (nodeTemplates.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_NodeTemplate
   */
  public function get($project, $region, $nodeTemplate, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'nodeTemplate' => $nodeTemplate);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_NodeTemplate");
  }
  /**
   *  (nodeTemplates.insert)
   *
   * @param Google_Service_Compute_NodeTemplate $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, $region, Google_Service_Compute_NodeTemplate $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (nodeTemplates.listNodeTemplates)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_NodeTemplateList
   */
  public function listNodeTemplates($project, $region, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_NodeTemplateList");
  }
}
