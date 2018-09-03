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
 * The "announcements" collection of methods.
 * Typical usage is:
 *  <code>
 *   $classroomService = new Google_Service_Classroom(...);
 *   $announcements = $classroomService->announcements;
 *  </code>
 */
class Google_Service_Classroom_Resource_CoursesAnnouncements extends Google_Service_Resource
{
  /**
   *  (announcements.create)
   *
   * @param Google_Service_Classroom_Announcement $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_Announcement
   */
  public function create($courseId, Google_Service_Classroom_Announcement $postBody, $optParams = array())
  {
    $params = array('courseId' => $courseId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Classroom_Announcement");
  }
  /**
   *  (announcements.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_ClassroomEmpty
   */
  public function delete($courseId, $id, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Classroom_ClassroomEmpty");
  }
  /**
   *  (announcements.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_Announcement
   */
  public function get($courseId, $id, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Classroom_Announcement");
  }
  /**
   *  (announcements.listCoursesAnnouncements)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Classroom_ListAnnouncementsResponse
   */
  public function listCoursesAnnouncements($courseId, $optParams = array())
  {
    $params = array('courseId' => $courseId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Classroom_ListAnnouncementsResponse");
  }
  /**
   *  (announcements.modifyAssignees)
   *
   * @param Google_Service_Classroom_ModifyAnnouncementAssigneesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_Announcement
   */
  public function modifyAssignees($courseId, $id, Google_Service_Classroom_ModifyAnnouncementAssigneesRequest $postBody, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('modifyAssignees', array($params), "Google_Service_Classroom_Announcement");
  }
  /**
   *  (announcements.patch)
   *
   * @param Google_Service_Classroom_Announcement $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Classroom_Announcement
   */
  public function patch($courseId, $id, Google_Service_Classroom_Announcement $postBody, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Classroom_Announcement");
  }
}
