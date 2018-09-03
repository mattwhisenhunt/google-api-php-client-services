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
 * The "style" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fusiontablesService = new Google_Service_Fusiontables(...);
 *   $style = $fusiontablesService->style;
 *  </code>
 */
class Google_Service_Fusiontables_Resource_Style extends Google_Service_Resource
{
  /**
   *  (style.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($tableId, $styleId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'styleId' => $styleId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (style.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_StyleSetting
   */
  public function get($tableId, $styleId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'styleId' => $styleId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Fusiontables_StyleSetting");
  }
  /**
   *  (style.insert)
   *
   * @param Google_Service_Fusiontables_StyleSetting $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_StyleSetting
   */
  public function insert($tableId, Google_Service_Fusiontables_StyleSetting $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Fusiontables_StyleSetting");
  }
  /**
   *  (style.listStyle)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Fusiontables_StyleSettingList
   */
  public function listStyle($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Fusiontables_StyleSettingList");
  }
  /**
   *  (style.patch)
   *
   * @param Google_Service_Fusiontables_StyleSetting $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_StyleSetting
   */
  public function patch($tableId, $styleId, Google_Service_Fusiontables_StyleSetting $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'styleId' => $styleId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Fusiontables_StyleSetting");
  }
  /**
   *  (style.update)
   *
   * @param Google_Service_Fusiontables_StyleSetting $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_StyleSetting
   */
  public function update($tableId, $styleId, Google_Service_Fusiontables_StyleSetting $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'styleId' => $styleId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Fusiontables_StyleSetting");
  }
}
