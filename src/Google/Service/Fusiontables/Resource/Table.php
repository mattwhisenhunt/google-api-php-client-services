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
 * The "table" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fusiontablesService = new Google_Service_Fusiontables(...);
 *   $table = $fusiontablesService->table;
 *  </code>
 */
class Google_Service_Fusiontables_Resource_Table extends Google_Service_Resource
{
  /**
   *  (table.copy)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Fusiontables_Table
   */
  public function copy($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('copy', array($params), "Google_Service_Fusiontables_Table");
  }
  /**
   *  (table.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (table.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Table
   */
  public function get($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Fusiontables_Table");
  }
  /**
   *  (table.importRows)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Fusiontables_Import
   */
  public function importRows($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('importRows', array($params), "Google_Service_Fusiontables_Import");
  }
  /**
   *  (table.importTable)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Fusiontables_Table
   */
  public function importTable($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('importTable', array($params), "Google_Service_Fusiontables_Table");
  }
  /**
   *  (table.insert)
   *
   * @param Google_Service_Fusiontables_Table $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Table
   */
  public function insert(Google_Service_Fusiontables_Table $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Fusiontables_Table");
  }
  /**
   *  (table.listTable)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Fusiontables_TableList
   */
  public function listTable($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Fusiontables_TableList");
  }
  /**
   *  (table.patch)
   *
   * @param Google_Service_Fusiontables_Table $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Fusiontables_Table
   */
  public function patch($tableId, Google_Service_Fusiontables_Table $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Fusiontables_Table");
  }
  /**
   *  (table.refetchSheet)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Task
   */
  public function refetchSheet($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('refetchSheet', array($params), "Google_Service_Fusiontables_Task");
  }
  /**
   *  (table.replaceRows)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Fusiontables_Task
   */
  public function replaceRows($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('replaceRows', array($params), "Google_Service_Fusiontables_Task");
  }
  /**
   *  (table.update)
   *
   * @param Google_Service_Fusiontables_Table $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Fusiontables_Table
   */
  public function update($tableId, Google_Service_Fusiontables_Table $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Fusiontables_Table");
  }
}
