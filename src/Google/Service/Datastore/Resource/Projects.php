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
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datastoreService = new Google_Service_Datastore(...);
 *   $projects = $datastoreService->projects;
 *  </code>
 */
class Google_Service_Datastore_Resource_Projects extends Google_Service_Resource
{
  /**
   *  (projects.allocateIds)
   *
   * @param Google_Service_Datastore_AllocateIdsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Datastore_AllocateIdsResponse
   */
  public function allocateIds($projectId, Google_Service_Datastore_AllocateIdsRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('allocateIds', array($params), "Google_Service_Datastore_AllocateIdsResponse");
  }
  /**
   *  (projects.beginTransaction)
   *
   * @param Google_Service_Datastore_BeginTransactionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Datastore_BeginTransactionResponse
   */
  public function beginTransaction($projectId, Google_Service_Datastore_BeginTransactionRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('beginTransaction', array($params), "Google_Service_Datastore_BeginTransactionResponse");
  }
  /**
   *  (projects.commit)
   *
   * @param Google_Service_Datastore_CommitRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Datastore_CommitResponse
   */
  public function commit($projectId, Google_Service_Datastore_CommitRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('commit', array($params), "Google_Service_Datastore_CommitResponse");
  }
  /**
   *  (projects.export)
   *
   * @param Google_Service_Datastore_GoogleDatastoreAdminV1ExportEntitiesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Datastore_GoogleLongrunningOperation
   */
  public function export($projectId, Google_Service_Datastore_GoogleDatastoreAdminV1ExportEntitiesRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('export', array($params), "Google_Service_Datastore_GoogleLongrunningOperation");
  }
  /**
   *  (projects.import)
   *
   * @param Google_Service_Datastore_GoogleDatastoreAdminV1ImportEntitiesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Datastore_GoogleLongrunningOperation
   */
  public function import($projectId, Google_Service_Datastore_GoogleDatastoreAdminV1ImportEntitiesRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('import', array($params), "Google_Service_Datastore_GoogleLongrunningOperation");
  }
  /**
   *  (projects.lookup)
   *
   * @param Google_Service_Datastore_LookupRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Datastore_LookupResponse
   */
  public function lookup($projectId, Google_Service_Datastore_LookupRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('lookup', array($params), "Google_Service_Datastore_LookupResponse");
  }
  /**
   *  (projects.reserveIds)
   *
   * @param Google_Service_Datastore_ReserveIdsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Datastore_ReserveIdsResponse
   */
  public function reserveIds($projectId, Google_Service_Datastore_ReserveIdsRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reserveIds', array($params), "Google_Service_Datastore_ReserveIdsResponse");
  }
  /**
   *  (projects.rollback)
   *
   * @param Google_Service_Datastore_RollbackRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Datastore_RollbackResponse
   */
  public function rollback($projectId, Google_Service_Datastore_RollbackRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('rollback', array($params), "Google_Service_Datastore_RollbackResponse");
  }
  /**
   *  (projects.runQuery)
   *
   * @param Google_Service_Datastore_RunQueryRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Datastore_RunQueryResponse
   */
  public function runQuery($projectId, Google_Service_Datastore_RunQueryRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('runQuery', array($params), "Google_Service_Datastore_RunQueryResponse");
  }
}
