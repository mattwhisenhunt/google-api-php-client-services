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
 * The "annotationsets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $annotationsets = $genomicsService->annotationsets;
 *  </code>
 */
class Google_Service_Genomics_Resource_Annotationsets extends Google_Service_Resource
{
  /**
   *  (annotationsets.create)
   *
   * @param Google_Service_Genomics_AnnotationSet $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_AnnotationSet
   */
  public function create(Google_Service_Genomics_AnnotationSet $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Genomics_AnnotationSet");
  }
  /**
   *  (annotationsets.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_GenomicsEmpty
   */
  public function delete($annotationSetId, $optParams = array())
  {
    $params = array('annotationSetId' => $annotationSetId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Genomics_GenomicsEmpty");
  }
  /**
   *  (annotationsets.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_AnnotationSet
   */
  public function get($annotationSetId, $optParams = array())
  {
    $params = array('annotationSetId' => $annotationSetId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Genomics_AnnotationSet");
  }
  /**
   *  (annotationsets.search)
   *
   * @param Google_Service_Genomics_SearchAnnotationSetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_SearchAnnotationSetsResponse
   */
  public function search(Google_Service_Genomics_SearchAnnotationSetsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_Genomics_SearchAnnotationSetsResponse");
  }
  /**
   *  (annotationsets.update)
   *
   * @param Google_Service_Genomics_AnnotationSet $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Genomics_AnnotationSet
   */
  public function update($annotationSetId, Google_Service_Genomics_AnnotationSet $postBody, $optParams = array())
  {
    $params = array('annotationSetId' => $annotationSetId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Genomics_AnnotationSet");
  }
}
