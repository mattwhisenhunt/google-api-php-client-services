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
 * The "photo" collection of methods.
 * Typical usage is:
 *  <code>
 *   $streetviewpublishService = new Google_Service_StreetViewPublish(...);
 *   $photo = $streetviewpublishService->photo;
 *  </code>
 */
class Google_Service_StreetViewPublish_Resource_Photo extends Google_Service_Resource
{
  /**
   *  (photo.create)
   *
   * @param Google_Service_StreetViewPublish_Photo $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_StreetViewPublish_Photo
   */
  public function create(Google_Service_StreetViewPublish_Photo $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_StreetViewPublish_Photo");
  }
  /**
   *  (photo.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_StreetViewPublish_StreetviewpublishEmpty
   */
  public function delete($photoId, $optParams = array())
  {
    $params = array('photoId' => $photoId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_StreetViewPublish_StreetviewpublishEmpty");
  }
  /**
   *  (photo.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_StreetViewPublish_Photo
   */
  public function get($photoId, $optParams = array())
  {
    $params = array('photoId' => $photoId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_StreetViewPublish_Photo");
  }
  /**
   *  (photo.startUpload)
   *
   * @param Google_Service_StreetViewPublish_StreetviewpublishEmpty $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_StreetViewPublish_UploadRef
   */
  public function startUpload(Google_Service_StreetViewPublish_StreetviewpublishEmpty $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('startUpload', array($params), "Google_Service_StreetViewPublish_UploadRef");
  }
  /**
   *  (photo.update)
   *
   * @param Google_Service_StreetViewPublish_Photo $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_StreetViewPublish_Photo
   */
  public function update($id, Google_Service_StreetViewPublish_Photo $postBody, $optParams = array())
  {
    $params = array('id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_StreetViewPublish_Photo");
  }
}
