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
 * The "promooffer" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_Service_Books(...);
 *   $promooffer = $booksService->promooffer;
 *  </code>
 */
class Google_Service_Books_Resource_Promooffer extends Google_Service_Resource
{
  /**
   *  (promooffer.accept)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function accept($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('accept', array($params));
  }
  /**
   *  (promooffer.dismiss)
   *
   * @param array $optParams Optional parameters.
   *

   */
  public function dismiss($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('dismiss', array($params));
  }
  /**
   *  (promooffer.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Books_Offers
   */
  public function get($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Books_Offers");
  }
}
