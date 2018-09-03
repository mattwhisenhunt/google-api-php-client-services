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
 * The "invitations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $classroomService = new Google_Service_Classroom(...);
 *   $invitations = $classroomService->invitations;
 *  </code>
 */
class Google_Service_Classroom_Resource_Invitations extends Google_Service_Resource
{
  /**
   *  (invitations.accept)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_ClassroomEmpty
   */
  public function accept($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('accept', array($params), "Google_Service_Classroom_ClassroomEmpty");
  }
  /**
   *  (invitations.create)
   *
   * @param Google_Service_Classroom_Invitation $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_Invitation
   */
  public function create(Google_Service_Classroom_Invitation $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Classroom_Invitation");
  }
  /**
   *  (invitations.delete)
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
   *  (invitations.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_Invitation
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Classroom_Invitation");
  }
  /**
   *  (invitations.listInvitations)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Classroom_ListInvitationsResponse
   */
  public function listInvitations($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Classroom_ListInvitationsResponse");
  }
}
