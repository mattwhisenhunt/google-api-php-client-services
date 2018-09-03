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
 * The "spreadsheets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sheetsService = new Google_Service_Sheets(...);
 *   $spreadsheets = $sheetsService->spreadsheets;
 *  </code>
 */
class Google_Service_Sheets_Resource_Spreadsheets extends Google_Service_Resource
{
  /**
   *  (spreadsheets.batchUpdate)
   *
   * @param Google_Service_Sheets_BatchUpdateSpreadsheetRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Sheets_BatchUpdateSpreadsheetResponse
   */
  public function batchUpdate($spreadsheetId, Google_Service_Sheets_BatchUpdateSpreadsheetRequest $postBody, $optParams = array())
  {
    $params = array('spreadsheetId' => $spreadsheetId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdate', array($params), "Google_Service_Sheets_BatchUpdateSpreadsheetResponse");
  }
  /**
   *  (spreadsheets.create)
   *
   * @param Google_Service_Sheets_Spreadsheet $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Sheets_Spreadsheet
   */
  public function create(Google_Service_Sheets_Spreadsheet $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Sheets_Spreadsheet");
  }
  /**
   *  (spreadsheets.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Sheets_Spreadsheet
   */
  public function get($spreadsheetId, $optParams = array())
  {
    $params = array('spreadsheetId' => $spreadsheetId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Sheets_Spreadsheet");
  }
  /**
   *  (spreadsheets.getByDataFilter)
   *
   * @param Google_Service_Sheets_GetSpreadsheetByDataFilterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Sheets_Spreadsheet
   */
  public function getByDataFilter($spreadsheetId, Google_Service_Sheets_GetSpreadsheetByDataFilterRequest $postBody, $optParams = array())
  {
    $params = array('spreadsheetId' => $spreadsheetId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getByDataFilter', array($params), "Google_Service_Sheets_Spreadsheet");
  }
}
