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
 * The "agent" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dialogflowService = new Google_Service_Dialogflow(...);
 *   $agent = $dialogflowService->agent;
 *  </code>
 */
class Google_Service_Dialogflow_Resource_ProjectsAgent extends Google_Service_Resource
{
  /**
   *  (agent.export)
   *
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2ExportAgentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleLongrunningOperation
   */
  public function export($parent, Google_Service_Dialogflow_GoogleCloudDialogflowV2ExportAgentRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('export', array($params), "Google_Service_Dialogflow_GoogleLongrunningOperation");
  }
  /**
   *  (agent.import)
   *
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2ImportAgentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleLongrunningOperation
   */
  public function import($parent, Google_Service_Dialogflow_GoogleCloudDialogflowV2ImportAgentRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('import', array($params), "Google_Service_Dialogflow_GoogleLongrunningOperation");
  }
  /**
   *  (agent.restore)
   *
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2RestoreAgentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleLongrunningOperation
   */
  public function restore($parent, Google_Service_Dialogflow_GoogleCloudDialogflowV2RestoreAgentRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('restore', array($params), "Google_Service_Dialogflow_GoogleLongrunningOperation");
  }
  /**
   *  (agent.search)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2SearchAgentsResponse
   */
  public function search($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_Dialogflow_GoogleCloudDialogflowV2SearchAgentsResponse");
  }
  /**
   *  (agent.train)
   *
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2TrainAgentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleLongrunningOperation
   */
  public function train($parent, Google_Service_Dialogflow_GoogleCloudDialogflowV2TrainAgentRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('train', array($params), "Google_Service_Dialogflow_GoogleLongrunningOperation");
  }
}
