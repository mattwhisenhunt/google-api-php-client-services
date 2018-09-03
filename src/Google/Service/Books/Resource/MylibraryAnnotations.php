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
 *   $booksService = new Google_Service_Books(...);
 *   $annotations = $booksService->annotations;
 *  </code>
 */
class Google_Service_Books_Resource_MylibraryAnnotations extends Google_Service_Resource
{
  /**
   *  (annotations.delete)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function delete($annotationId, $optParams = array())
  {
    $params = array('annotationId' => $annotationId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (annotations.insert)
   *
   * @param Google_Service_Books_Annotation $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Books_Annotation
   */
  public function insert(Google_Service_Books_Annotation $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Books_Annotation");
  }
  /**
   *  (annotations.listMylibraryAnnotations)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Books_Annotations
   */
  public function listMylibraryAnnotations($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Books_Annotations");
  }
  /**
   *  (annotations.summary)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Books_AnnotationsSummary
   */
  public function summary($layerIds, $volumeId, $optParams = array())
  {
    $params = array('layerIds' => $layerIds, 'volumeId' => $volumeId);
    $params = array_merge($params, $optParams);
    return $this->call('summary', array($params), "Google_Service_Books_AnnotationsSummary");
  }
  /**
   *  (annotations.update)
   *
   * @param Google_Service_Books_Annotation $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Books_Annotation
   */
  public function update($annotationId, Google_Service_Books_Annotation $postBody, $optParams = array())
  {
    $params = array('annotationId' => $annotationId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Books_Annotation");
  }
}
