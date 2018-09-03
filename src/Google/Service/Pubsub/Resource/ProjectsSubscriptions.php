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
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $pubsubService = new Google_Service_Pubsub(...);
 *   $subscriptions = $pubsubService->subscriptions;
 *  </code>
 */
class Google_Service_Pubsub_Resource_ProjectsSubscriptions extends Google_Service_Resource
{
  /**
   *  (subscriptions.acknowledge)
   *
   * @param Google_Service_Pubsub_AcknowledgeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_PubsubEmpty
   */
  public function acknowledge($subscription, Google_Service_Pubsub_AcknowledgeRequest $postBody, $optParams = array())
  {
    $params = array('subscription' => $subscription ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('acknowledge', array($params), "Google_Service_Pubsub_PubsubEmpty");
  }
  /**
   *  (subscriptions.create)
   *
   * @param Google_Service_Pubsub_Subscription $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_Subscription
   */
  public function create($name, Google_Service_Pubsub_Subscription $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Pubsub_Subscription");
  }
  /**
   *  (subscriptions.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_PubsubEmpty
   */
  public function delete($subscription, $optParams = array())
  {
    $params = array('subscription' => $subscription);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Pubsub_PubsubEmpty");
  }
  /**
   *  (subscriptions.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_Subscription
   */
  public function get($subscription, $optParams = array())
  {
    $params = array('subscription' => $subscription);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Pubsub_Subscription");
  }
  /**
   *  (subscriptions.getIamPolicy)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_Policy
   */
  public function getIamPolicy($resource, $optParams = array())
  {
    $params = array('resource' => $resource);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_Pubsub_Policy");
  }
  /**
   *  (subscriptions.listProjectsSubscriptions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Pubsub_ListSubscriptionsResponse
   */
  public function listProjectsSubscriptions($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Pubsub_ListSubscriptionsResponse");
  }
  /**
   *  (subscriptions.modifyAckDeadline)
   *
   * @param Google_Service_Pubsub_ModifyAckDeadlineRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_PubsubEmpty
   */
  public function modifyAckDeadline($subscription, Google_Service_Pubsub_ModifyAckDeadlineRequest $postBody, $optParams = array())
  {
    $params = array('subscription' => $subscription ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('modifyAckDeadline', array($params), "Google_Service_Pubsub_PubsubEmpty");
  }
  /**
   *  (subscriptions.modifyPushConfig)
   *
   * @param Google_Service_Pubsub_ModifyPushConfigRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_PubsubEmpty
   */
  public function modifyPushConfig($subscription, Google_Service_Pubsub_ModifyPushConfigRequest $postBody, $optParams = array())
  {
    $params = array('subscription' => $subscription ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('modifyPushConfig', array($params), "Google_Service_Pubsub_PubsubEmpty");
  }
  /**
   *  (subscriptions.patch)
   *
   * @param Google_Service_Pubsub_UpdateSubscriptionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_Subscription
   */
  public function patch($name, Google_Service_Pubsub_UpdateSubscriptionRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Pubsub_Subscription");
  }
  /**
   *  (subscriptions.pull)
   *
   * @param Google_Service_Pubsub_PullRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_PullResponse
   */
  public function pull($subscription, Google_Service_Pubsub_PullRequest $postBody, $optParams = array())
  {
    $params = array('subscription' => $subscription ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('pull', array($params), "Google_Service_Pubsub_PullResponse");
  }
  /**
   *  (subscriptions.seek)
   *
   * @param Google_Service_Pubsub_SeekRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_SeekResponse
   */
  public function seek($subscription, Google_Service_Pubsub_SeekRequest $postBody, $optParams = array())
  {
    $params = array('subscription' => $subscription ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('seek', array($params), "Google_Service_Pubsub_SeekResponse");
  }
  /**
   *  (subscriptions.setIamPolicy)
   *
   * @param Google_Service_Pubsub_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_Policy
   */
  public function setIamPolicy($resource, Google_Service_Pubsub_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_Pubsub_Policy");
  }
  /**
   *  (subscriptions.testIamPermissions)
   *
   * @param Google_Service_Pubsub_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_Pubsub_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_Pubsub_TestIamPermissionsResponse");
  }
}
