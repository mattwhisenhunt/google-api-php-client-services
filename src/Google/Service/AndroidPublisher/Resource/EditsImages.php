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
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $images = $androidpublisherService->images;
 *  </code>
 */
class Google_Service_AndroidPublisher_Resource_EditsImages extends Google_Service_Resource
{
  /**
   *  (images.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($packageName, $editId, $language, $imageType, $imageId, $optParams = array())
  {
    $params = array('packageName' => $packageName, 'editId' => $editId, 'language' => $language, 'imageType' => $imageType, 'imageId' => $imageId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (images.deleteall)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_ImagesDeleteAllResponse
   */
  public function deleteall($packageName, $editId, $language, $imageType, $optParams = array())
  {
    $params = array('packageName' => $packageName, 'editId' => $editId, 'language' => $language, 'imageType' => $imageType);
    $params = array_merge($params, $optParams);
    return $this->call('deleteall', array($params), "Google_Service_AndroidPublisher_ImagesDeleteAllResponse");
  }
  /**
   *  (images.listEditsImages)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_ImagesListResponse
   */
  public function listEditsImages($packageName, $editId, $language, $imageType, $optParams = array())
  {
    $params = array('packageName' => $packageName, 'editId' => $editId, 'language' => $language, 'imageType' => $imageType);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AndroidPublisher_ImagesListResponse");
  }
  /**
   *  (images.upload)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_ImagesUploadResponse
   */
  public function upload($packageName, $editId, $language, $imageType, $optParams = array())
  {
    $params = array('packageName' => $packageName, 'editId' => $editId, 'language' => $language, 'imageType' => $imageType);
    $params = array_merge($params, $optParams);
    return $this->call('upload', array($params), "Google_Service_AndroidPublisher_ImagesUploadResponse");
  }
}
