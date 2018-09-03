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
 * The "values" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sheetsService = new Google_Service_Sheets(...);
 *   $values = $sheetsService->values;
 *  </code>
 */
class Google_Service_Sheets_Resource_SpreadsheetsValues extends Google_Service_Resource
{
  /**
   *  (values.append)
   *
   * @param Google_Service_Sheets_ValueRange $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Sheets_AppendValuesResponse
   */
  public function append($spreadsheetId, $range, Google_Service_Sheets_ValueRange $postBody, $optParams = array())
  {
    $params = array('spreadsheetId' => $spreadsheetId, 'range' => $range ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('append', array($params), "Google_Service_Sheets_AppendValuesResponse");
  }
  /**
   *  (values.batchClear)
   *
   * @param Google_Service_Sheets_BatchClearValuesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Sheets_BatchClearValuesResponse
   */
  public function batchClear($spreadsheetId, Google_Service_Sheets_BatchClearValuesRequest $postBody, $optParams = array())
  {
    $params = array('spreadsheetId' => $spreadsheetId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchClear', array($params), "Google_Service_Sheets_BatchClearValuesResponse");
  }
  /**
   *  (values.batchClearByDataFilter)
   *
   * @param Google_Service_Sheets_BatchClearValuesByDataFilterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Sheets_BatchClearValuesByDataFilterResponse
   */
  public function batchClearByDataFilter($spreadsheetId, Google_Service_Sheets_BatchClearValuesByDataFilterRequest $postBody, $optParams = array())
  {
    $params = array('spreadsheetId' => $spreadsheetId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchClearByDataFilter', array($params), "Google_Service_Sheets_BatchClearValuesByDataFilterResponse");
  }
  /**
   *  (values.batchGet)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Sheets_BatchGetValuesResponse
   */
  public function batchGet($spreadsheetId, $optParams = array())
  {
    $params = array('spreadsheetId' => $spreadsheetId);
    $params = array_merge($params, $optParams);
    return $this->call('batchGet', array($params), "Google_Service_Sheets_BatchGetValuesResponse");
  }
  /**
   *  (values.batchGetByDataFilter)
   *
   * @param Google_Service_Sheets_BatchGetValuesByDataFilterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Sheets_BatchGetValuesByDataFilterResponse
   */
  public function batchGetByDataFilter($spreadsheetId, Google_Service_Sheets_BatchGetValuesByDataFilterRequest $postBody, $optParams = array())
  {
    $params = array('spreadsheetId' => $spreadsheetId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchGetByDataFilter', array($params), "Google_Service_Sheets_BatchGetValuesByDataFilterResponse");
  }
  /**
   *  (values.batchUpdate)
   *
   * @param Google_Service_Sheets_BatchUpdateValuesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Sheets_BatchUpdateValuesResponse
   */
  public function batchUpdate($spreadsheetId, Google_Service_Sheets_BatchUpdateValuesRequest $postBody, $optParams = array())
  {
    $params = array('spreadsheetId' => $spreadsheetId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdate', array($params), "Google_Service_Sheets_BatchUpdateValuesResponse");
  }
  /**
   *  (values.batchUpdateByDataFilter)
   *
   * @param Google_Service_Sheets_BatchUpdateValuesByDataFilterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Sheets_BatchUpdateValuesByDataFilterResponse
   */
  public function batchUpdateByDataFilter($spreadsheetId, Google_Service_Sheets_BatchUpdateValuesByDataFilterRequest $postBody, $optParams = array())
  {
    $params = array('spreadsheetId' => $spreadsheetId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdateByDataFilter', array($params), "Google_Service_Sheets_BatchUpdateValuesByDataFilterResponse");
  }
  /**
   *  (values.clear)
   *
   * @param Google_Service_Sheets_ClearValuesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Sheets_ClearValuesResponse
   */
  public function clear($spreadsheetId, $range, Google_Service_Sheets_ClearValuesRequest $postBody, $optParams = array())
  {
    $params = array('spreadsheetId' => $spreadsheetId, 'range' => $range ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('clear', array($params), "Google_Service_Sheets_ClearValuesResponse");
  }
  /**
   *  (values.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Sheets_ValueRange
   */
  public function get($spreadsheetId, $range, $optParams = array())
  {
    $params = array('spreadsheetId' => $spreadsheetId, 'range' => $range);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Sheets_ValueRange");
  }
  /**
   *  (values.update)
   *
   * @param Google_Service_Sheets_ValueRange $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Sheets_UpdateValuesResponse
   */
  public function update($spreadsheetId, $range, Google_Service_Sheets_ValueRange $postBody, $optParams = array())
  {
    $params = array('spreadsheetId' => $spreadsheetId, 'range' => $range ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Sheets_UpdateValuesResponse");
  }
}
