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
 * The "sslCerts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google_Service_SQLAdmin(...);
 *   $sslCerts = $sqladminService->sslCerts;
 *  </code>
 */
class Google_Service_SQLAdmin_Resource_SslCerts extends Google_Service_Resource
{
  /**
   *  (sslCerts.createEphemeral)
   *
   * @param Google_Service_SQLAdmin_SslCertsCreateEphemeralRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_SslCert
   */
  public function createEphemeral($project, $instance, Google_Service_SQLAdmin_SslCertsCreateEphemeralRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createEphemeral', array($params), "Google_Service_SQLAdmin_SslCert");
  }
  /**
   *  (sslCerts.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */
  public function delete($project, $instance, $sha1Fingerprint, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'sha1Fingerprint' => $sha1Fingerprint);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_SQLAdmin_Operation");
  }
  /**
   *  (sslCerts.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_SslCert
   */
  public function get($project, $instance, $sha1Fingerprint, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'sha1Fingerprint' => $sha1Fingerprint);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_SQLAdmin_SslCert");
  }
  /**
   *  (sslCerts.insert)
   *
   * @param Google_Service_SQLAdmin_SslCertsInsertRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_SslCertsInsertResponse
   */
  public function insert($project, $instance, Google_Service_SQLAdmin_SslCertsInsertRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_SQLAdmin_SslCertsInsertResponse");
  }
  /**
   *  (sslCerts.listSslCerts)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_SslCertsListResponse
   */
  public function listSslCerts($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_SQLAdmin_SslCertsListResponse");
  }
}
