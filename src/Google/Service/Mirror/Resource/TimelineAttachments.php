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
 *   $mirrorService = new Google_Service_Mirror(...);
 *   $attachments = $mirrorService->attachments;
 *  </code>
 */
class Google_Service_Mirror_Resource_TimelineAttachments extends Google_Service_Resource
{
  /**
   *  (attachments.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($itemId, $attachmentId, $optParams = array())
  {
    $params = array('itemId' => $itemId, 'attachmentId' => $attachmentId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (attachments.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Mirror_Attachment
   */
  public function get($itemId, $attachmentId, $optParams = array())
  {
    $params = array('itemId' => $itemId, 'attachmentId' => $attachmentId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Mirror_Attachment");
  }
  /**
   *  (attachments.insert)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Mirror_Attachment
   */
  public function insert($itemId, $optParams = array())
  {
    $params = array('itemId' => $itemId);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Mirror_Attachment");
  }
  /**
   *  (attachments.listTimelineAttachments)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Mirror_AttachmentsListResponse
   */
  public function listTimelineAttachments($itemId, $optParams = array())
  {
    $params = array('itemId' => $itemId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Mirror_AttachmentsListResponse");
  }
}
