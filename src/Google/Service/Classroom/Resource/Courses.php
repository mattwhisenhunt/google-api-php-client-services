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
 * The "courses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $classroomService = new Google_Service_Classroom(...);
 *   $courses = $classroomService->courses;
 *  </code>
 */
class Google_Service_Classroom_Resource_Courses extends Google_Service_Resource
{
  /**
   *  (courses.create)
   *
   * @param Google_Service_Classroom_Course $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_Course
   */
  public function create(Google_Service_Classroom_Course $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Classroom_Course");
  }
  /**
   *  (courses.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_ClassroomEmpty
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Classroom_ClassroomEmpty");
  }
  /**
   *  (courses.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_Course
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Classroom_Course");
  }
  /**
   *  (courses.listCourses)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Classroom_ListCoursesResponse
   */
  public function listCourses($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Classroom_ListCoursesResponse");
  }
  /**
   *  (courses.patch)
   *
   * @param Google_Service_Classroom_Course $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Classroom_Course
   */
  public function patch($id, Google_Service_Classroom_Course $postBody, $optParams = array())
  {
    $params = array('id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Classroom_Course");
  }
  /**
   *  (courses.update)
   *
   * @param Google_Service_Classroom_Course $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_Course
   */
  public function update($id, Google_Service_Classroom_Course $postBody, $optParams = array())
  {
    $params = array('id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Classroom_Course");
  }
}
