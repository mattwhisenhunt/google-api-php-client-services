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
 * The "guardians" collection of methods.
 * Typical usage is:
 *  <code>
 *   $classroomService = new Google_Service_Classroom(...);
 *   $guardians = $classroomService->guardians;
 *  </code>
 */
class Google_Service_Classroom_Resource_UserProfilesGuardians extends Google_Service_Resource
{
  /**
   *  (guardians.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_ClassroomEmpty
   */
  public function delete($studentId, $guardianId, $optParams = array())
  {
    $params = array('studentId' => $studentId, 'guardianId' => $guardianId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Classroom_ClassroomEmpty");
  }
  /**
   *  (guardians.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_Guardian
   */
  public function get($studentId, $guardianId, $optParams = array())
  {
    $params = array('studentId' => $studentId, 'guardianId' => $guardianId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Classroom_Guardian");
  }
  /**
   *  (guardians.listUserProfilesGuardians)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Classroom_ListGuardiansResponse
   */
  public function listUserProfilesGuardians($studentId, $optParams = array())
  {
    $params = array('studentId' => $studentId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Classroom_ListGuardiansResponse");
  }
}
