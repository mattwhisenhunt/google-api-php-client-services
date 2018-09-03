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
 * The "tables" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $tables = $bigqueryService->tables;
 *  </code>
 */
class Google_Service_Bigquery_Resource_Tables extends Google_Service_Resource
{
  /**
   *  (tables.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($projectId, $datasetId, $tableId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (tables.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Bigquery_Table
   */
  public function get($projectId, $datasetId, $tableId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Bigquery_Table");
  }
  /**
   *  (tables.insert)
   *
   * @param Google_Service_Bigquery_Table $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Bigquery_Table
   */
  public function insert($projectId, $datasetId, Google_Service_Bigquery_Table $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Bigquery_Table");
  }
  /**
   *  (tables.listTables)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Bigquery_TableList
   */
  public function listTables($projectId, $datasetId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Bigquery_TableList");
  }
  /**
   *  (tables.patch)
   *
   * @param Google_Service_Bigquery_Table $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Bigquery_Table
   */
  public function patch($projectId, $datasetId, $tableId, Google_Service_Bigquery_Table $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Bigquery_Table");
  }
  /**
   *  (tables.update)
   *
   * @param Google_Service_Bigquery_Table $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Bigquery_Table
   */
  public function update($projectId, $datasetId, $tableId, Google_Service_Bigquery_Table $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Bigquery_Table");
  }
}
