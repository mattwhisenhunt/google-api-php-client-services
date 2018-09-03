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
 * The "datasets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fitnessService = new Google_Service_Fitness(...);
 *   $datasets = $fitnessService->datasets;
 *  </code>
 */
class Google_Service_Fitness_Resource_UsersDataSourcesDatasets extends Google_Service_Resource
{
  /**
   *  (datasets.delete)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function delete($userId, $dataSourceId, $datasetId, $optParams = array())
  {
    $params = array('userId' => $userId, 'dataSourceId' => $dataSourceId, 'datasetId' => $datasetId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (datasets.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Fitness_Dataset
   */
  public function get($userId, $dataSourceId, $datasetId, $optParams = array())
  {
    $params = array('userId' => $userId, 'dataSourceId' => $dataSourceId, 'datasetId' => $datasetId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Fitness_Dataset");
  }
  /**
   *  (datasets.patch)
   *
   * @param Google_Service_Fitness_Dataset $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Fitness_Dataset
   */
  public function patch($userId, $dataSourceId, $datasetId, Google_Service_Fitness_Dataset $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'dataSourceId' => $dataSourceId, 'datasetId' => $datasetId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Fitness_Dataset");
  }
}
