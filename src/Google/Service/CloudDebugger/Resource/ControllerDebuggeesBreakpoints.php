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
class Google_Service_CloudDebugger_Resource_ControllerDebuggeesBreakpoints extends Google_Service_Resource
{
  /**
   *  (breakpoints.listControllerDebuggeesBreakpoints)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_CloudDebugger_ListActiveBreakpointsResponse
   */
  public function listControllerDebuggeesBreakpoints($debuggeeId, $optParams = array())
  {
    $params = array('debuggeeId' => $debuggeeId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudDebugger_ListActiveBreakpointsResponse");
  }
  /**
   *  (breakpoints.update)
   *
   * @param Google_Service_CloudDebugger_UpdateActiveBreakpointRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudDebugger_UpdateActiveBreakpointResponse
   */
  public function update($debuggeeId, $id, Google_Service_CloudDebugger_UpdateActiveBreakpointRequest $postBody, $optParams = array())
  {
    $params = array('debuggeeId' => $debuggeeId, 'id' => $id ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_CloudDebugger_UpdateActiveBreakpointResponse");
  }
}
