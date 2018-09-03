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
 * The "functions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudfunctionsService = new Google_Service_CloudFunctions(...);
 *   $functions = $cloudfunctionsService->functions;
 *  </code>
 */
class Google_Service_CloudFunctions_Resource_ProjectsLocationsFunctions extends Google_Service_Resource
{
  /**
   *  (functions.callProjectsLocationsFunctions)
   *
   * @param Google_Service_CloudFunctions_CallFunctionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudFunctions_CallFunctionResponse
   */
  public function callProjectsLocationsFunctions($name, Google_Service_CloudFunctions_CallFunctionRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('call', array($params), "Google_Service_CloudFunctions_CallFunctionResponse");
  }
  /**
   *  (functions.create)
   *
   * @param Google_Service_CloudFunctions_CloudFunction $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudFunctions_Operation
   */
  public function create($location, Google_Service_CloudFunctions_CloudFunction $postBody, $optParams = array())
  {
    $params = array('location' => $location ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudFunctions_Operation");
  }
  /**
   *  (functions.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudFunctions_Operation
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_CloudFunctions_Operation");
  }
  /**
   *  (functions.generateDownloadUrl)
   *
   * @param Google_Service_CloudFunctions_GenerateDownloadUrlRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudFunctions_GenerateDownloadUrlResponse
   */
  public function generateDownloadUrl($name, Google_Service_CloudFunctions_GenerateDownloadUrlRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('generateDownloadUrl', array($params), "Google_Service_CloudFunctions_GenerateDownloadUrlResponse");
  }
  /**
   *  (functions.generateUploadUrl)
   *
   * @param Google_Service_CloudFunctions_GenerateUploadUrlRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudFunctions_GenerateUploadUrlResponse
   */
  public function generateUploadUrl($parent, Google_Service_CloudFunctions_GenerateUploadUrlRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('generateUploadUrl', array($params), "Google_Service_CloudFunctions_GenerateUploadUrlResponse");
  }
  /**
   *  (functions.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudFunctions_CloudFunction
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudFunctions_CloudFunction");
  }
  /**
   *  (functions.listProjectsLocationsFunctions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudFunctions_ListFunctionsResponse
   */
  public function listProjectsLocationsFunctions($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudFunctions_ListFunctionsResponse");
  }
  /**
   *  (functions.patch)
   *
   * @param Google_Service_CloudFunctions_CloudFunction $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudFunctions_Operation
   */
  public function patch($name, Google_Service_CloudFunctions_CloudFunction $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudFunctions_Operation");
  }
}
