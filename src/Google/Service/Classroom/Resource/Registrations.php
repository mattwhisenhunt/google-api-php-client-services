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
 * The "registrations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $classroomService = new Google_Service_Classroom(...);
 *   $registrations = $classroomService->registrations;
 *  </code>
 */
class Google_Service_Classroom_Resource_Registrations extends Google_Service_Resource
{
  /**
   *  (registrations.create)
   *
   * @param Google_Service_Classroom_Registration $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_Registration
   */
  public function create(Google_Service_Classroom_Registration $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Classroom_Registration");
  }
  /**
   *  (registrations.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Classroom_ClassroomEmpty
   */
  public function delete($registrationId, $optParams = array())
  {
    $params = array('registrationId' => $registrationId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Classroom_ClassroomEmpty");
  }
}
