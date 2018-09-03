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
 * The "environments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $composerService = new Google_Service_CloudComposer(...);
 *   $environments = $composerService->environments;
 *  </code>
 */
class Google_Service_CloudComposer_Resource_ProjectsLocationsEnvironments extends Google_Service_Resource
{
  /**
   *  (environments.create)
   *
   * @param Google_Service_CloudComposer_Environment $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudComposer_Operation
   */
  public function create($parent, Google_Service_CloudComposer_Environment $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudComposer_Operation");
  }
  /**
   *  (environments.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudComposer_Operation
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_CloudComposer_Operation");
  }
  /**
   *  (environments.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudComposer_Environment
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudComposer_Environment");
  }
  /**
   *  (environments.listProjectsLocationsEnvironments)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudComposer_ListEnvironmentsResponse
   */
  public function listProjectsLocationsEnvironments($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudComposer_ListEnvironmentsResponse");
  }
  /**
   *  (environments.patch)
   *
   * @param Google_Service_CloudComposer_Environment $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudComposer_Operation
   */
  public function patch($name, Google_Service_CloudComposer_Environment $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudComposer_Operation");
  }
}
