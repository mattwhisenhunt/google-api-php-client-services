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
 * The "sessions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $spannerService = new Google_Service_Spanner(...);
 *   $sessions = $spannerService->sessions;
 *  </code>
 */
class Google_Service_Spanner_Resource_ProjectsInstancesDatabasesSessions extends Google_Service_Resource
{
  /**
   *  (sessions.beginTransaction)
   *
   * @param Google_Service_Spanner_BeginTransactionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_Transaction
   */
  public function beginTransaction($session, Google_Service_Spanner_BeginTransactionRequest $postBody, $optParams = array())
  {
    $params = array('session' => $session ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('beginTransaction', array($params), "Google_Service_Spanner_Transaction");
  }
  /**
   *  (sessions.commit)
   *
   * @param Google_Service_Spanner_CommitRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_CommitResponse
   */
  public function commit($session, Google_Service_Spanner_CommitRequest $postBody, $optParams = array())
  {
    $params = array('session' => $session ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('commit', array($params), "Google_Service_Spanner_CommitResponse");
  }
  /**
   *  (sessions.create)
   *
   * @param Google_Service_Spanner_CreateSessionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_Session
   */
  public function create($database, Google_Service_Spanner_CreateSessionRequest $postBody, $optParams = array())
  {
    $params = array('database' => $database ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Spanner_Session");
  }
  /**
   *  (sessions.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_SpannerEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Spanner_SpannerEmpty");
  }
  /**
   *  (sessions.executeSql)
   *
   * @param Google_Service_Spanner_ExecuteSqlRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_ResultSet
   */
  public function executeSql($session, Google_Service_Spanner_ExecuteSqlRequest $postBody, $optParams = array())
  {
    $params = array('session' => $session ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('executeSql', array($params), "Google_Service_Spanner_ResultSet");
  }
  /**
   *  (sessions.executeStreamingSql)
   *
   * @param Google_Service_Spanner_ExecuteSqlRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_PartialResultSet
   */
  public function executeStreamingSql($session, Google_Service_Spanner_ExecuteSqlRequest $postBody, $optParams = array())
  {
    $params = array('session' => $session ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('executeStreamingSql', array($params), "Google_Service_Spanner_PartialResultSet");
  }
  /**
   *  (sessions.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_Session
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Spanner_Session");
  }
  /**
   *  (sessions.listProjectsInstancesDatabasesSessions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Spanner_ListSessionsResponse
   */
  public function listProjectsInstancesDatabasesSessions($database, $optParams = array())
  {
    $params = array('database' => $database);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Spanner_ListSessionsResponse");
  }
  /**
   *  (sessions.partitionQuery)
   *
   * @param Google_Service_Spanner_PartitionQueryRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_PartitionResponse
   */
  public function partitionQuery($session, Google_Service_Spanner_PartitionQueryRequest $postBody, $optParams = array())
  {
    $params = array('session' => $session ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('partitionQuery', array($params), "Google_Service_Spanner_PartitionResponse");
  }
  /**
   *  (sessions.partitionRead)
   *
   * @param Google_Service_Spanner_PartitionReadRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_PartitionResponse
   */
  public function partitionRead($session, Google_Service_Spanner_PartitionReadRequest $postBody, $optParams = array())
  {
    $params = array('session' => $session ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('partitionRead', array($params), "Google_Service_Spanner_PartitionResponse");
  }
  /**
   *  (sessions.read)
   *
   * @param Google_Service_Spanner_ReadRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_ResultSet
   */
  public function read($session, Google_Service_Spanner_ReadRequest $postBody, $optParams = array())
  {
    $params = array('session' => $session ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('read', array($params), "Google_Service_Spanner_ResultSet");
  }
  /**
   *  (sessions.rollback)
   *
   * @param Google_Service_Spanner_RollbackRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_SpannerEmpty
   */
  public function rollback($session, Google_Service_Spanner_RollbackRequest $postBody, $optParams = array())
  {
    $params = array('session' => $session ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('rollback', array($params), "Google_Service_Spanner_SpannerEmpty");
  }
  /**
   *  (sessions.streamingRead)
   *
   * @param Google_Service_Spanner_ReadRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_PartialResultSet
   */
  public function streamingRead($session, Google_Service_Spanner_ReadRequest $postBody, $optParams = array())
  {
    $params = array('session' => $session ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('streamingRead', array($params), "Google_Service_Spanner_PartialResultSet");
  }
}
