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
 * The "profiles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudprofilerService = new Google_Service_CloudProfiler(...);
 *   $profiles = $cloudprofilerService->profiles;
 *  </code>
 */
class Google_Service_CloudProfiler_Resource_ProjectsProfiles extends Google_Service_Resource
{
  /**
   *  (profiles.create)
   *
   * @param Google_Service_CloudProfiler_CreateProfileRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudProfiler_Profile
   */
  public function create($parent, Google_Service_CloudProfiler_CreateProfileRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudProfiler_Profile");
  }
  /**
   *  (profiles.createOffline)
   *
   * @param Google_Service_CloudProfiler_Profile $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudProfiler_Profile
   */
  public function createOffline($parent, Google_Service_CloudProfiler_Profile $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createOffline', array($params), "Google_Service_CloudProfiler_Profile");
  }
  /**
   *  (profiles.patch)
   *
   * @param Google_Service_CloudProfiler_Profile $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudProfiler_Profile
   */
  public function patch($name, Google_Service_CloudProfiler_Profile $postBody, $optParams = array())
  {
    $params = array('name' => $name ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudProfiler_Profile");
  }
}
