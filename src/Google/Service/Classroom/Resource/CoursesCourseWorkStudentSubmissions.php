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
 * The "studentSubmissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $classroomService = new Google_Service_Classroom(...);
 *   $studentSubmissions = $classroomService->studentSubmissions;
 *  </code>
 */
class Google_Service_Classroom_Resource_CoursesCourseWorkStudentSubmissions extends Google_Service_Resource
{
  /**
   *  (studentSubmissions.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_StudentSubmission
   */
  public function get($courseId, $courseWorkId, $id, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'courseWorkId' => $courseWorkId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Classroom_StudentSubmission");
  }
  /**
   *  (studentSubmissions.listCoursesCourseWorkStudentSubmissions)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Classroom_ListStudentSubmissionsResponse
   */
  public function listCoursesCourseWorkStudentSubmissions($courseId, $courseWorkId, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'courseWorkId' => $courseWorkId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Classroom_ListStudentSubmissionsResponse");
  }
  /**
   *  (studentSubmissions.modifyAttachments)
   *
   * @param Google_Service_Classroom_ModifyAttachmentsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_StudentSubmission
   */
  public function modifyAttachments($courseId, $courseWorkId, $id, Google_Service_Classroom_ModifyAttachmentsRequest $postBody, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'courseWorkId' => $courseWorkId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('modifyAttachments', array($params), "Google_Service_Classroom_StudentSubmission");
  }
  /**
   *  (studentSubmissions.patch)
   *
   * @param Google_Service_Classroom_StudentSubmission $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Classroom_StudentSubmission
   */
  public function patch($courseId, $courseWorkId, $id, Google_Service_Classroom_StudentSubmission $postBody, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'courseWorkId' => $courseWorkId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Classroom_StudentSubmission");
  }
  /**
   *  (studentSubmissions.reclaim)
   *
   * @param Google_Service_Classroom_ReclaimStudentSubmissionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_ClassroomEmpty
   */
  public function reclaim($courseId, $courseWorkId, $id, Google_Service_Classroom_ReclaimStudentSubmissionRequest $postBody, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'courseWorkId' => $courseWorkId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reclaim', array($params), "Google_Service_Classroom_ClassroomEmpty");
  }
  /**
   *  (studentSubmissions.returnCoursesCourseWorkStudentSubmissions)
   *
   * @param Google_Service_Classroom_ReturnStudentSubmissionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_ClassroomEmpty
   */
  public function returnCoursesCourseWorkStudentSubmissions($courseId, $courseWorkId, $id, Google_Service_Classroom_ReturnStudentSubmissionRequest $postBody, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'courseWorkId' => $courseWorkId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('return', array($params), "Google_Service_Classroom_ClassroomEmpty");
  }
  /**
   *  (studentSubmissions.turnIn)
   *
   * @param Google_Service_Classroom_TurnInStudentSubmissionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_ClassroomEmpty
   */
  public function turnIn($courseId, $courseWorkId, $id, Google_Service_Classroom_TurnInStudentSubmissionRequest $postBody, $optParams = array())
  {
    $params = array('courseId' => $courseId, 'courseWorkId' => $courseWorkId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('turnIn', array($params), "Google_Service_Classroom_ClassroomEmpty");
  }
}
