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
 * The "courseWork" collection of methods.
 * Typical usage is:
 *  <code>
 *   $classroomService = new Google_Service_Classroom(...);
 *   $courseWork = $classroomService->courseWork;
 *  </code>
 */
class Google_Service_Classroom_Resource_CoursesCourseWork extends Google_Service_Resource
{
  /**
   *  (courseWork.create)
   *
   * @param Google_Service_Classroom_CourseWork $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_CourseWork
   */
  public function create($courseId, Google_Service_Classroom_CourseWork $postBody, $optParams = array())
  {
    $params = array('courseId' => $courseId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Classroom_CourseWork");
  }
  /**
   *  (courseWork.delete)
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
   *  (courseWork.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_CourseWork
   */
  public function get($courseId, $id, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Classroom_CourseWork");
  }
  /**
   *  (courseWork.listCoursesCourseWork)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Classroom_ListCourseWorkResponse
   */
  public function listCoursesCourseWork($courseId, $optParams = array())
  {
    $params = array('courseId' => $courseId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Classroom_ListCourseWorkResponse");
  }
  /**
   *  (courseWork.modifyAssignees)
   *
   * @param Google_Service_Classroom_ModifyCourseWorkAssigneesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_CourseWork
   */
  public function modifyAssignees($courseId, $id, Google_Service_Classroom_ModifyCourseWorkAssigneesRequest $postBody, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('modifyAssignees', array($params), "Google_Service_Classroom_CourseWork");
  }
  /**
   *  (courseWork.patch)
   *
   * @param Google_Service_Classroom_CourseWork $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Classroom_CourseWork
   */
  public function patch($courseId, $id, Google_Service_Classroom_CourseWork $postBody, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Classroom_CourseWork");
  }
}
