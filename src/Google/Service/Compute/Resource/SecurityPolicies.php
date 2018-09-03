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
 * The "securityPolicies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $securityPolicies = $computeService->securityPolicies;
 *  </code>
 */
class Google_Service_Compute_Resource_SecurityPolicies extends Google_Service_Resource
{
  /**
   *  (securityPolicies.addRule)
   *
   * @param Google_Service_Compute_SecurityPolicyRule $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Operation
   */
  public function addRule($project, $securityPolicy, Google_Service_Compute_SecurityPolicyRule $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'securityPolicy' => $securityPolicy ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addRule', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (securityPolicies.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $securityPolicy, $optParams = array())
  {
    $params = array('project' => $project, 'securityPolicy' => $securityPolicy);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (securityPolicies.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_SecurityPolicy
   */
  public function get($project, $securityPolicy, $optParams = array())
  {
    $params = array('project' => $project, 'securityPolicy' => $securityPolicy);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_SecurityPolicy");
  }
  /**
   *  (securityPolicies.getRule)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_SecurityPolicyRule
   */
  public function getRule($project, $securityPolicy, $optParams = array())
  {
    $params = array('project' => $project, 'securityPolicy' => $securityPolicy);
    $params = array_merge($params, $optParams);
    return $this->call('getRule', array($params), "Google_Service_Compute_SecurityPolicyRule");
  }
  /**
   *  (securityPolicies.insert)
   *
   * @param Google_Service_Compute_SecurityPolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_SecurityPolicy $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (securityPolicies.listSecurityPolicies)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_SecurityPolicyList
   */
  public function listSecurityPolicies($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_SecurityPolicyList");
  }
  /**
   *  (securityPolicies.patch)
   *
   * @param Google_Service_Compute_SecurityPolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function patch($project, $securityPolicy, Google_Service_Compute_SecurityPolicy $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'securityPolicy' => $securityPolicy ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (securityPolicies.patchRule)
   *
   * @param Google_Service_Compute_SecurityPolicyRule $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function patchRule($project, $securityPolicy, Google_Service_Compute_SecurityPolicyRule $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'securityPolicy' => $securityPolicy ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patchRule', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (securityPolicies.removeRule)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function removeRule($project, $securityPolicy, $optParams = array())
  {
    $params = array('project' => $project, 'securityPolicy' => $securityPolicy);
    $params = array_merge($params, $optParams);
    return $this->call('removeRule', array($params), "Google_Service_Compute_Operation");
  }
}
