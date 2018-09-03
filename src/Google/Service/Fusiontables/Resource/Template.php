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
 * The "template" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fusiontablesService = new Google_Service_Fusiontables(...);
 *   $template = $fusiontablesService->template;
 *  </code>
 */
class Google_Service_Fusiontables_Resource_Template extends Google_Service_Resource
{
  /**
   *  (template.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($tableId, $templateId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'templateId' => $templateId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (template.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Template
   */
  public function get($tableId, $templateId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'templateId' => $templateId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Fusiontables_Template");
  }
  /**
   *  (template.insert)
   *
   * @param Google_Service_Fusiontables_Template $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Template
   */
  public function insert($tableId, Google_Service_Fusiontables_Template $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Fusiontables_Template");
  }
  /**
   *  (template.listTemplate)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Fusiontables_TemplateList
   */
  public function listTemplate($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Fusiontables_TemplateList");
  }
  /**
   *  (template.patch)
   *
   * @param Google_Service_Fusiontables_Template $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Template
   */
  public function patch($tableId, $templateId, Google_Service_Fusiontables_Template $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'templateId' => $templateId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Fusiontables_Template");
  }
  /**
   *  (template.update)
   *
   * @param Google_Service_Fusiontables_Template $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Template
   */
  public function update($tableId, $templateId, Google_Service_Fusiontables_Template $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'templateId' => $templateId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Fusiontables_Template");
  }
}
