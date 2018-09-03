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
 * The "breakpoints" collection of methods.
 * Typical usage is:
 *  <code>
 *   $clouddebuggerService = new Google_Service_CloudDebugger(...);
 *   $breakpoints = $clouddebuggerService->breakpoints;
 *  </code>
 */
class Google_Service_CloudDebugger_Resource_DebuggerDebuggeesBreakpoints extends Google_Service_Resource
{
  /**
   *  (breakpoints.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudDebugger_ClouddebuggerEmpty
   */
  public function delete($debuggeeId, $breakpointId, $optParams = array())
  {
    $params = array('debuggeeId' => $debuggeeId, 'breakpointId' => $breakpointId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_CloudDebugger_ClouddebuggerEmpty");
  }
  /**
   *  (breakpoints.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudDebugger_GetBreakpointResponse
   */
  public function get($debuggeeId, $breakpointId, $optParams = array())
  {
    $params = array('debuggeeId' => $debuggeeId, 'breakpointId' => $breakpointId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudDebugger_GetBreakpointResponse");
  }
  /**
   *  (breakpoints.listDebuggerDebuggeesBreakpoints)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudDebugger_ListBreakpointsResponse
   */
  public function listDebuggerDebuggeesBreakpoints($debuggeeId, $optParams = array())
  {
    $params = array('debuggeeId' => $debuggeeId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudDebugger_ListBreakpointsResponse");
  }
  /**
   *  (breakpoints.set)
   *
   * @param Google_Service_CloudDebugger_Breakpoint $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudDebugger_SetBreakpointResponse
   */
  public function set($debuggeeId, Google_Service_CloudDebugger_Breakpoint $postBody, $optParams = array())
  {
    $params = array('debuggeeId' => $debuggeeId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('set', array($params), "Google_Service_CloudDebugger_SetBreakpointResponse");
  }
}
