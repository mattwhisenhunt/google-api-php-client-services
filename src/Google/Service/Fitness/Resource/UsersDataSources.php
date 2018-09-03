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
 * The "dataSources" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fitnessService = new Google_Service_Fitness(...);
 *   $dataSources = $fitnessService->dataSources;
 *  </code>
 */
class Google_Service_Fitness_Resource_UsersDataSources extends Google_Service_Resource
{
  /**
   *  (dataSources.create)
   *
   * @param Google_Service_Fitness_DataSource $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fitness_DataSource
   */
  public function create($userId, Google_Service_Fitness_DataSource $postBody, $optParams = array())
  {
    $params = array('userId' => $userId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Fitness_DataSource");
  }
  /**
   *  (dataSources.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fitness_DataSource
   */
  public function delete($userId, $dataSourceId, $optParams = array())
  {
    $params = array('userId' => $userId, 'dataSourceId' => $dataSourceId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Fitness_DataSource");
  }
  /**
   *  (dataSources.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fitness_DataSource
   */
  public function get($userId, $dataSourceId, $optParams = array())
  {
    $params = array('userId' => $userId, 'dataSourceId' => $dataSourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Fitness_DataSource");
  }
  /**
   *  (dataSources.listUsersDataSources)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Fitness_ListDataSourcesResponse
   */
  public function listUsersDataSources($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Fitness_ListDataSourcesResponse");
  }
  /**
   *  (dataSources.patch)
   *
   * @param Google_Service_Fitness_DataSource $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fitness_DataSource
   */
  public function patch($userId, $dataSourceId, Google_Service_Fitness_DataSource $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'dataSourceId' => $dataSourceId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Fitness_DataSource");
  }
  /**
   *  (dataSources.update)
   *
   * @param Google_Service_Fitness_DataSource $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fitness_DataSource
   */
  public function update($userId, $dataSourceId, Google_Service_Fitness_DataSource $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'dataSourceId' => $dataSourceId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Fitness_DataSource");
  }
}
