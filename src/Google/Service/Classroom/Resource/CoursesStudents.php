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
 * The "students" collection of methods.
 * Typical usage is:
 *  <code>
 *   $classroomService = new Google_Service_Classroom(...);
 *   $students = $classroomService->students;
 *  </code>
 */
class Google_Service_Classroom_Resource_CoursesStudents extends Google_Service_Resource
{
  /**
   *  (students.create)
   *
   * @param Google_Service_Classroom_Student $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Classroom_Student
   */
  public function create($courseId, Google_Service_Classroom_Student $postBody, $optParams = array())
  {
    $params = array('courseId' => $courseId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Classroom_Student");
  }
  /**
   *  (students.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_ClassroomEmpty
   */
  public function delete($courseId, $userId, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Classroom_ClassroomEmpty");
  }
  /**
   *  (students.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_Student
   */
  public function get($courseId, $userId, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Classroom_Student");
  }
  /**
   *  (students.listCoursesStudents)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Classroom_ListStudentsResponse
   */
  public function listCoursesStudents($courseId, $optParams = array())
  {
    $params = array('courseId' => $courseId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Classroom_ListStudentsResponse");
  }
}
