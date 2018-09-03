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
 * The "column" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fusiontablesService = new Google_Service_Fusiontables(...);
 *   $column = $fusiontablesService->column;
 *  </code>
 */
class Google_Service_Fusiontables_Resource_Column extends Google_Service_Resource
{
  /**
   *  (column.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($tableId, $columnId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'columnId' => $columnId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (column.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Column
   */
  public function get($tableId, $columnId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'columnId' => $columnId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Fusiontables_Column");
  }
  /**
   *  (column.insert)
   *
   * @param Google_Service_Fusiontables_Column $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Column
   */
  public function insert($tableId, Google_Service_Fusiontables_Column $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Fusiontables_Column");
  }
  /**
   *  (column.listColumn)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Fusiontables_ColumnList
   */
  public function listColumn($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Fusiontables_ColumnList");
  }
  /**
   *  (column.patch)
   *
   * @param Google_Service_Fusiontables_Column $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Column
   */
  public function patch($tableId, $columnId, Google_Service_Fusiontables_Column $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'columnId' => $columnId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Fusiontables_Column");
  }
  /**
   *  (column.update)
   *
   * @param Google_Service_Fusiontables_Column $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Column
   */
  public function update($tableId, $columnId, Google_Service_Fusiontables_Column $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'columnId' => $columnId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Fusiontables_Column");
  }
}
