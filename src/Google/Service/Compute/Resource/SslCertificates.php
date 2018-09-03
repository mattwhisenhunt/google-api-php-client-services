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
 * The "sslCertificates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $sslCertificates = $computeService->sslCertificates;
 *  </code>
 */
class Google_Service_Compute_Resource_SslCertificates extends Google_Service_Resource
{
  /**
   *  (sslCertificates.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $sslCertificate, $optParams = array())
  {
    $params = array('project' => $project, 'sslCertificate' => $sslCertificate);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (sslCertificates.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_SslCertificate
   */
  public function get($project, $sslCertificate, $optParams = array())
  {
    $params = array('project' => $project, 'sslCertificate' => $sslCertificate);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_SslCertificate");
  }
  /**
   *  (sslCertificates.insert)
   *
   * @param Google_Service_Compute_SslCertificate $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_SslCertificate $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (sslCertificates.listSslCertificates)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_SslCertificateList
   */
  public function listSslCertificates($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_SslCertificateList");
  }
}
