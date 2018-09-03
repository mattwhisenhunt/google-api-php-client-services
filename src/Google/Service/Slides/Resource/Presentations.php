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
 * The "presentations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $slidesService = new Google_Service_Slides(...);
 *   $presentations = $slidesService->presentations;
 *  </code>
 */
class Google_Service_Slides_Resource_Presentations extends Google_Service_Resource
{
  /**
   *  (presentations.batchUpdate)
   *
   * @param Google_Service_Slides_BatchUpdatePresentationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Slides_BatchUpdatePresentationResponse
   */
  public function batchUpdate($presentationId, Google_Service_Slides_BatchUpdatePresentationRequest $postBody, $optParams = array())
  {
    $params = array('presentationId' => $presentationId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdate', array($params), "Google_Service_Slides_BatchUpdatePresentationResponse");
  }
  /**
   *  (presentations.create)
   *
   * @param Google_Service_Slides_Presentation $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Slides_Presentation
   */
  public function create(Google_Service_Slides_Presentation $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Slides_Presentation");
  }
  /**
   *  (presentations.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Slides_Presentation
   */
  public function get($presentationId, $optParams = array())
  {
    $params = array('presentationId' => $presentationId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Slides_Presentation");
  }
}
