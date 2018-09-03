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
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google_Service_SQLAdmin(...);
 *   $instances = $sqladminService->instances;
 *  </code>
 */
class Google_Service_SQLAdmin_Resource_Instances extends Google_Service_Resource
{
  /**
   *  (instances.addServerCa)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function addServerCa($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('addServerCa', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.cloneInstances)
   *
   * @param Google_Service_SQLAdmin_InstancesCloneRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function cloneInstances($project, $instance, Google_Service_SQLAdmin_InstancesCloneRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('clone', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function delete($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.demoteMaster)
   *
   * @param Google_Service_SQLAdmin_InstancesDemoteMasterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function demoteMaster($project, $instance, Google_Service_SQLAdmin_InstancesDemoteMasterRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('demoteMaster', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.export)
   *
   * @param Google_Service_SQLAdmin_InstancesExportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function export($project, $instance, Google_Service_SQLAdmin_InstancesExportRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('export', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.failover)
   *
   * @param Google_Service_SQLAdmin_InstancesFailoverRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function failover($project, $instance, Google_Service_SQLAdmin_InstancesFailoverRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('failover', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_DatabaseInstance
   */
  public function get($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_SQLAdmin_DatabaseInstance");
  }
  /**
   *  (instances.import)
   *
   * @param Google_Service_SQLAdmin_InstancesImportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function import($project, $instance, Google_Service_SQLAdmin_InstancesImportRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('import', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.insert)
   *
   * @param Google_Service_SQLAdmin_DatabaseInstance $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function insert($project, Google_Service_SQLAdmin_DatabaseInstance $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.listInstances)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_SQLAdmin_InstancesListResponse
   */
  public function listInstances($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_SQLAdmin_InstancesListResponse");
  }
  /**
   *  (instances.listServerCas)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_InstancesListServerCasResponse
   */
  public function listServerCas($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('listServerCas', array($params), "Google_Service_SQLAdmin_InstancesListServerCasResponse");
  }
  /**
   *  (instances.patch)
   *
   * @param Google_Service_SQLAdmin_DatabaseInstance $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function patch($project, $instance, Google_Service_SQLAdmin_DatabaseInstance $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.promoteReplica)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function promoteReplica($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('promoteReplica', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.resetSslConfig)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function resetSslConfig($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('resetSslConfig', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.restart)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function restart($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('restart', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.restoreBackup)
   *
   * @param Google_Service_SQLAdmin_InstancesRestoreBackupRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function restoreBackup($project, $instance, Google_Service_SQLAdmin_InstancesRestoreBackupRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('restoreBackup', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.rotateServerCa)
   *
   * @param Google_Service_SQLAdmin_InstancesRotateServerCaRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function rotateServerCa($project, $instance, Google_Service_SQLAdmin_InstancesRotateServerCaRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('rotateServerCa', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.startReplica)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function startReplica($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('startReplica', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.stopReplica)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function stopReplica($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('stopReplica', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.truncateLog)
   *
   * @param Google_Service_SQLAdmin_InstancesTruncateLogRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function truncateLog($project, $instance, Google_Service_SQLAdmin_InstancesTruncateLogRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('truncateLog', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (instances.update)
   *
   * @param Google_Service_SQLAdmin_DatabaseInstance $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function update($project, $instance, Google_Service_SQLAdmin_DatabaseInstance $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_SQLAdmin_Operation");
  }
}
