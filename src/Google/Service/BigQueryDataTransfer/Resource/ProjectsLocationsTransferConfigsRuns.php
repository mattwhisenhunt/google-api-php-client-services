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
 * The "runs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigquerydatatransferService = new Google_Service_BigQueryDataTransfer(...);
 *   $runs = $bigquerydatatransferService->runs;
 *  </code>
 */
class Google_Service_BigQueryDataTransfer_Resource_ProjectsLocationsTransferConfigsRuns extends Google_Service_Resource
{
  /**
   *  (runs.delete)
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
   *  (runs.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigQueryDataTransfer_TransferRun
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_BigQueryDataTransfer_TransferRun");
  }
  /**
   *  (runs.listProjectsLocationsTransferConfigsRuns)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_BigQueryDataTransfer_ListTransferRunsResponse
   */
  public function listProjectsLocationsTransferConfigsRuns($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_BigQueryDataTransfer_ListTransferRunsResponse");
  }
}
