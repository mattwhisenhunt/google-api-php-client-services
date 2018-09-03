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
 * The "images" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $images = $computeService->images;
 *  </code>
 */
class Google_Service_Compute_Resource_Images extends Google_Service_Resource
{
  /**
   *  (images.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function delete($project, $image, $optParams = array())
  {
    $params = array('project' => $project, 'image' => $image);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (images.deprecate)
   *
   * @param Google_Service_Compute_DeprecationStatus $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function deprecate($project, $image, Google_Service_Compute_DeprecationStatus $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'image' => $image ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('deprecate', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (images.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Image
   */
  public function get($project, $image, $optParams = array())
  {
    $params = array('project' => $project, 'image' => $image);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_Image");
  }
  /**
   *  (images.getFromFamily)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Image
   */
  public function getFromFamily($project, $family, $optParams = array())
  {
    $params = array('project' => $project, 'family' => $family);
    $params = array_merge($params, $optParams);
    return $this->call('getFromFamily', array($params), "Google_Service_Compute_Image");
  }
  /**
   *  (images.insert)
   *
   * @param Google_Service_Compute_Image $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_Operation
   */
  public function insert($project, Google_Service_Compute_Image $postBody, $optParams = array())
  {
    $params = array('project' => $project ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   *  (images.listImages)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Compute_ImageList
   */
  public function listImages($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_ImageList");
  }
  /**
   *  (images.setLabels)
   *
   * @param Google_Service_Compute_GlobalSetLabelsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Compute_Operation
   */
  public function setLabels($project, $resource, Google_Service_Compute_GlobalSetLabelsRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'resource' => $resource ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setLabels', array($params), "Google_Service_Compute_Operation");
  }
}
