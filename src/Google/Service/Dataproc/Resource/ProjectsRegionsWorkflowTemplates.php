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
 * The "workflowTemplates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataprocService = new Google_Service_Dataproc(...);
 *   $workflowTemplates = $dataprocService->workflowTemplates;
 *  </code>
 */
class Google_Service_Dataproc_Resource_ProjectsRegionsWorkflowTemplates extends Google_Service_Resource
{
  /**
   *  (workflowTemplates.create)
   *
   * @param Google_Service_Dataproc_WorkflowTemplate $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_WorkflowTemplate
   */
  public function create($parent, Google_Service_Dataproc_WorkflowTemplate $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Dataproc_WorkflowTemplate");
  }
  /**
   *  (workflowTemplates.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dataproc_DataprocEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Dataproc_DataprocEmpty");
  }
  /**
   *  (workflowTemplates.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dataproc_WorkflowTemplate
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Dataproc_WorkflowTemplate");
  }
  /**
   *  (workflowTemplates.getIamPolicy)
   *
   * @param Google_Service_Dataproc_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_Policy
   */
  public function getIamPolicy($resource, Google_Service_Dataproc_GetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_Dataproc_Policy");
  }
  /**
   *  (workflowTemplates.instantiate)
   *
   * @param Google_Service_Dataproc_InstantiateWorkflowTemplateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_Operation
   */
  public function instantiate($name, Google_Service_Dataproc_InstantiateWorkflowTemplateRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('instantiate', array($params), "Google_Service_Dataproc_Operation");
  }
  /**
   *  (workflowTemplates.instantiateInline)
   *
   * @param Google_Service_Dataproc_WorkflowTemplate $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dataproc_Operation
   */
  public function instantiateInline($parent, Google_Service_Dataproc_WorkflowTemplate $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('instantiateInline', array($params), "Google_Service_Dataproc_Operation");
  }
  /**
   *  (workflowTemplates.listProjectsRegionsWorkflowTemplates)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dataproc_ListWorkflowTemplatesResponse
   */
  public function listProjectsRegionsWorkflowTemplates($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dataproc_ListWorkflowTemplatesResponse");
  }
  /**
   *  (workflowTemplates.setIamPolicy)
   *
   * @param Google_Service_Dataproc_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_Policy
   */
  public function setIamPolicy($resource, Google_Service_Dataproc_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_Dataproc_Policy");
  }
  /**
   *  (workflowTemplates.testIamPermissions)
   *
   * @param Google_Service_Dataproc_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_Dataproc_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_Dataproc_TestIamPermissionsResponse");
  }
  /**
   *  (workflowTemplates.update)
   *
   * @param Google_Service_Dataproc_WorkflowTemplate $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataproc_WorkflowTemplate
   */
  public function update($name, Google_Service_Dataproc_WorkflowTemplate $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Dataproc_WorkflowTemplate");
  }
}
