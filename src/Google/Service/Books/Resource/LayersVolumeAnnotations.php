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
 * The "volumeAnnotations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_Service_Books(...);
 *   $volumeAnnotations = $booksService->volumeAnnotations;
 *  </code>
 */
class Google_Service_Books_Resource_LayersVolumeAnnotations extends Google_Service_Resource
{
  /**
   *  (volumeAnnotations.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Books_Volumeannotation
   */
  public function get($volumeId, $layerId, $annotationId, $optParams = array())
  {
    $params = array('volumeId' => $volumeId, 'layerId' => $layerId, 'annotationId' => $annotationId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Books_Volumeannotation");
  }
  /**
   *  (volumeAnnotations.listLayersVolumeAnnotations)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Books_Volumeannotations
   */
  public function listLayersVolumeAnnotations($volumeId, $layerId, $contentVersion, $optParams = array())
  {
    $params = array('volumeId' => $volumeId, 'layerId' => $layerId, 'contentVersion' => $contentVersion);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Books_Volumeannotations");
  }
}
