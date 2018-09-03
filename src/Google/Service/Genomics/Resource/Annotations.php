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
 * The "annotations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $annotations = $genomicsService->annotations;
 *  </code>
 */
class Google_Service_Genomics_Resource_Annotations extends Google_Service_Resource
{
  /**
   *  (annotations.batchCreate)
   *
   * @param Google_Service_Genomics_BatchCreateAnnotationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_BatchCreateAnnotationsResponse
   */
  public function batchCreate(Google_Service_Genomics_BatchCreateAnnotationsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchCreate', array($params), "Google_Service_Genomics_BatchCreateAnnotationsResponse");
  }
  /**
   *  (annotations.create)
   *
   * @param Google_Service_Genomics_Annotation $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Annotation
   */
  public function create(Google_Service_Genomics_Annotation $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Genomics_Annotation");
  }
  /**
   *  (annotations.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_GenomicsEmpty
   */
  public function delete($annotationId, $optParams = array())
  {
    $params = array('annotationId' => $annotationId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Genomics_GenomicsEmpty");
  }
  /**
   *  (annotations.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Annotation
   */
  public function get($annotationId, $optParams = array())
  {
    $params = array('annotationId' => $annotationId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Genomics_Annotation");
  }
  /**
   *  (annotations.search)
   *
   * @param Google_Service_Genomics_SearchAnnotationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_SearchAnnotationsResponse
   */
  public function search(Google_Service_Genomics_SearchAnnotationsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_Genomics_SearchAnnotationsResponse");
  }
  /**
   *  (annotations.update)
   *
   * @param Google_Service_Genomics_Annotation $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Genomics_Annotation
   */
  public function update($annotationId, Google_Service_Genomics_Annotation $postBody, $optParams = array())
  {
    $params = array('annotationId' => $annotationId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Genomics_Annotation");
  }
}
