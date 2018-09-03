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
 * The "guardianInvitations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $classroomService = new Google_Service_Classroom(...);
 *   $guardianInvitations = $classroomService->guardianInvitations;
 *  </code>
 */
class Google_Service_Classroom_Resource_UserProfilesGuardianInvitations extends Google_Service_Resource
{
  /**
   *  (guardianInvitations.create)
   *
   * @param Google_Service_Classroom_GuardianInvitation $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_GuardianInvitation
   */
  public function create($studentId, Google_Service_Classroom_GuardianInvitation $postBody, $optParams = array())
  {
    $params = array('studentId' => $studentId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Classroom_GuardianInvitation");
  }
  /**
   *  (guardianInvitations.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_GuardianInvitation
   */
  public function get($studentId, $invitationId, $optParams = array())
  {
    $params = array('studentId' => $studentId, 'invitationId' => $invitationId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Classroom_GuardianInvitation");
  }
  /**
   *  (guardianInvitations.listUserProfilesGuardianInvitations)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Classroom_ListGuardianInvitationsResponse
   */
  public function listUserProfilesGuardianInvitations($studentId, $optParams = array())
  {
    $params = array('studentId' => $studentId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Classroom_ListGuardianInvitationsResponse");
  }
  /**
   *  (guardianInvitations.patch)
   *
   * @param Google_Service_Classroom_GuardianInvitation $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Classroom_GuardianInvitation
   */
  public function patch($studentId, $invitationId, Google_Service_Classroom_GuardianInvitation $postBody, $optParams = array())
  {
    $params = array('studentId' => $studentId, 'invitationId' => $invitationId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Classroom_GuardianInvitation");
  }
}
