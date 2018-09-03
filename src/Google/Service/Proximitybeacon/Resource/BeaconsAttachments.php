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
 * The "attachments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $proximitybeaconService = new Google_Service_Proximitybeacon(...);
 *   $attachments = $proximitybeaconService->attachments;
 *  </code>
 */
class Google_Service_Proximitybeacon_Resource_BeaconsAttachments extends Google_Service_Resource
{
  /**
   *  (attachments.batchDelete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Proximitybeacon_DeleteAttachmentsResponse
   */
  public function batchDelete($beaconName, $optParams = array())
  {
    $params = array('beaconName' => $beaconName);
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', array($params), "Google_Service_Proximitybeacon_DeleteAttachmentsResponse");
  }
  /**
   *  (attachments.create)
   *
   * @param Google_Service_Proximitybeacon_BeaconAttachment $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Proximitybeacon_BeaconAttachment
   */
  public function create($beaconName, Google_Service_Proximitybeacon_BeaconAttachment $postBody, $optParams = array())
  {
    $params = array('beaconName' => $beaconName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Proximitybeacon_BeaconAttachment");
  }
  /**
   *  (attachments.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Proximitybeacon_ProximitybeaconEmpty
   */
  public function delete($attachmentName, $optParams = array())
  {
    $params = array('attachmentName' => $attachmentName);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Proximitybeacon_ProximitybeaconEmpty");
  }
  /**
   *  (attachments.listBeaconsAttachments)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Proximitybeacon_ListBeaconAttachmentsResponse
   */
  public function listBeaconsAttachments($beaconName, $optParams = array())
  {
    $params = array('beaconName' => $beaconName);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Proximitybeacon_ListBeaconAttachmentsResponse");
  }
}
