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
 * The "photos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $streetviewpublishService = new Google_Service_StreetViewPublish(...);
 *   $photos = $streetviewpublishService->photos;
 *  </code>
 */
class Google_Service_StreetViewPublish_Resource_Photos extends Google_Service_Resource
{
  /**
   *  (photos.batchDelete)
   *
   * @param Google_Service_StreetViewPublish_BatchDeletePhotosRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_StreetViewPublish_BatchDeletePhotosResponse
   */
  public function batchDelete(Google_Service_StreetViewPublish_BatchDeletePhotosRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', array($params), "Google_Service_StreetViewPublish_BatchDeletePhotosResponse");
  }
  /**
   *  (photos.batchGet)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_StreetViewPublish_BatchGetPhotosResponse
   */
  public function batchGet($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('batchGet', array($params), "Google_Service_StreetViewPublish_BatchGetPhotosResponse");
  }
  /**
   *  (photos.batchUpdate)
   *
   * @param Google_Service_StreetViewPublish_BatchUpdatePhotosRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_StreetViewPublish_BatchUpdatePhotosResponse
   */
  public function batchUpdate(Google_Service_StreetViewPublish_BatchUpdatePhotosRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdate', array($params), "Google_Service_StreetViewPublish_BatchUpdatePhotosResponse");
  }
  /**
   *  (photos.listPhotos)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_StreetViewPublish_ListPhotosResponse
   */
  public function listPhotos($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_StreetViewPublish_ListPhotosResponse");
  }
}
