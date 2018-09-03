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
 * The "sinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $loggingService = new Google_Service_Logging(...);
 *   $sinks = $loggingService->sinks;
 *  </code>
 */
class Google_Service_Logging_Resource_Sinks extends Google_Service_Resource
{
  /**
   *  (sinks.create)
   *
   * @param Google_Service_Logging_LogSink $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Logging_LogSink
   */
  public function create($parent, Google_Service_Logging_LogSink $postBody, $optParams = array())
  {
    $params = array('parent' => $parent ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Logging_LogSink");
  }
  /**
   *  (sinks.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Logging_LoggingEmpty
   */
  public function delete($sinkName, $optParams = array())
  {
    $params = array('sinkName' => $sinkName);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Logging_LoggingEmpty");
  }
  /**
   *  (sinks.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Logging_LogSink
   */
  public function get($sinkName, $optParams = array())
  {
    $params = array('sinkName' => $sinkName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Logging_LogSink");
  }
  /**
   *  (sinks.listSinks)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Logging_ListSinksResponse
   */
  public function listSinks($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Logging_ListSinksResponse");
  }
  /**
   *  (sinks.update)
   *
   * @param Google_Service_Logging_LogSink $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Logging_LogSink
   */
  public function update($sinkName, Google_Service_Logging_LogSink $postBody, $optParams = array())
  {
    $params = array('sinkName' => $sinkName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Logging_LogSink");
  }
}
