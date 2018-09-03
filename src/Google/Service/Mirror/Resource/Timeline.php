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
 * The "timeline" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mirrorService = new Google_Service_Mirror(...);
 *   $timeline = $mirrorService->timeline;
 *  </code>
 */
class Google_Service_Mirror_Resource_Timeline extends Google_Service_Resource
{
  /**
   *  (timeline.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (timeline.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Mirror_TimelineItem
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Mirror_TimelineItem");
  }
  /**
   *  (timeline.insert)
   *
   * @param Google_Service_Mirror_TimelineItem $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Mirror_TimelineItem
   */
  public function insert(Google_Service_Mirror_TimelineItem $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Mirror_TimelineItem");
  }
  /**
   *  (timeline.listTimeline)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Mirror_TimelineListResponse
   */
  public function listTimeline($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Mirror_TimelineListResponse");
  }
  /**
   *  (timeline.patch)
   *
   * @param Google_Service_Mirror_TimelineItem $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Mirror_TimelineItem
   */
  public function patch($id, Google_Service_Mirror_TimelineItem $postBody, $optParams = array())
  {
    $params = array('id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Mirror_TimelineItem");
  }
  /**
   *  (timeline.update)
   *
   * @param Google_Service_Mirror_TimelineItem $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Mirror_TimelineItem
   */
  public function update($id, Google_Service_Mirror_TimelineItem $postBody, $optParams = array())
  {
    $params = array('id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Mirror_TimelineItem");
  }
}
