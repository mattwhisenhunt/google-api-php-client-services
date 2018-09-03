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
 * The "intents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dialogflowService = new Google_Service_Dialogflow(...);
 *   $intents = $dialogflowService->intents;
 *  </code>
 */
class Google_Service_Dialogflow_Resource_ProjectsAgentIntents extends Google_Service_Resource
{
  /**
   *  (intents.batchDelete)
   *
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2BatchDeleteIntentsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleLongrunningOperation
   */
  public function batchDelete($parent, Google_Service_Dialogflow_GoogleCloudDialogflowV2BatchDeleteIntentsRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', array($params), "Google_Service_Dialogflow_GoogleLongrunningOperation");
  }
  /**
   *  (intents.batchUpdate)
   *
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2BatchUpdateIntentsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleLongrunningOperation
   */
  public function batchUpdate($parent, Google_Service_Dialogflow_GoogleCloudDialogflowV2BatchUpdateIntentsRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdate', array($params), "Google_Service_Dialogflow_GoogleLongrunningOperation");
  }
  /**
   *  (intents.create)
   *
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent
   */
  public function create($parent, Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent");
  }
  /**
   *  (intents.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleProtobufEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Dialogflow_GoogleProtobufEmpty");
  }
  /**
   *  (intents.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent");
  }
  /**
   *  (intents.listProjectsAgentIntents)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2ListIntentsResponse
   */
  public function listProjectsAgentIntents($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dialogflow_GoogleCloudDialogflowV2ListIntentsResponse");
  }
  /**
   *  (intents.patch)
   *
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent
   */
  public function patch($name, Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent");
  }
}
