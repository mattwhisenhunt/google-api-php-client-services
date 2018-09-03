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
 * The "transferConfigs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigquerydatatransferService = new Google_Service_BigQueryDataTransfer(...);
 *   $transferConfigs = $bigquerydatatransferService->transferConfigs;
 *  </code>
 */
class Google_Service_BigQueryDataTransfer_Resource_ProjectsTransferConfigs extends Google_Service_Resource
{
  /**
   *  (transferConfigs.create)
   *
   * @param Google_Service_BigQueryDataTransfer_TransferConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_BigQueryDataTransfer_TransferConfig
   */
  public function create($parent, Google_Service_BigQueryDataTransfer_TransferConfig $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_BigQueryDataTransfer_TransferConfig");
  }
  /**
   *  (transferConfigs.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigQueryDataTransfer_BigquerydatatransferEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_BigQueryDataTransfer_BigquerydatatransferEmpty");
  }
  /**
   *  (transferConfigs.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigQueryDataTransfer_TransferConfig
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_BigQueryDataTransfer_TransferConfig");
  }
  /**
   *  (transferConfigs.listProjectsTransferConfigs)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_BigQueryDataTransfer_ListTransferConfigsResponse
   */
  public function listProjectsTransferConfigs($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_BigQueryDataTransfer_ListTransferConfigsResponse");
  }
  /**
   *  (transferConfigs.patch)
   *
   * @param Google_Service_BigQueryDataTransfer_TransferConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_BigQueryDataTransfer_TransferConfig
   */
  public function patch($name, Google_Service_BigQueryDataTransfer_TransferConfig $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_BigQueryDataTransfer_TransferConfig");
  }
  /**
   *  (transferConfigs.scheduleRuns)
   *
   * @param Google_Service_BigQueryDataTransfer_ScheduleTransferRunsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigQueryDataTransfer_ScheduleTransferRunsResponse
   */
  public function scheduleRuns($parent, Google_Service_BigQueryDataTransfer_ScheduleTransferRunsRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('scheduleRuns', array($params), "Google_Service_BigQueryDataTransfer_ScheduleTransferRunsResponse");
  }
}
