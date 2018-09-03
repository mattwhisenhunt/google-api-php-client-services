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
 * The "beacons" collection of methods.
 * Typical usage is:
 *  <code>
 *   $proximitybeaconService = new Google_Service_Proximitybeacon(...);
 *   $beacons = $proximitybeaconService->beacons;
 *  </code>
 */
class Google_Service_Proximitybeacon_Resource_Beacons extends Google_Service_Resource
{
  /**
   *  (beacons.activate)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Proximitybeacon_ProximitybeaconEmpty
   */
  public function activate($beaconName, $optParams = array())
  {
    $params = array('beaconName' => $beaconName);
    $params = array_merge($params, $optParams);
    return $this->call('activate', array($params), "Google_Service_Proximitybeacon_ProximitybeaconEmpty");
  }
  /**
   *  (beacons.deactivate)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Proximitybeacon_ProximitybeaconEmpty
   */
  public function deactivate($beaconName, $optParams = array())
  {
    $params = array('beaconName' => $beaconName);
    $params = array_merge($params, $optParams);
    return $this->call('deactivate', array($params), "Google_Service_Proximitybeacon_ProximitybeaconEmpty");
  }
  /**
   *  (beacons.decommission)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Proximitybeacon_ProximitybeaconEmpty
   */
  public function decommission($beaconName, $optParams = array())
  {
    $params = array('beaconName' => $beaconName);
    $params = array_merge($params, $optParams);
    return $this->call('decommission', array($params), "Google_Service_Proximitybeacon_ProximitybeaconEmpty");
  }
  /**
   *  (beacons.delete)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Proximitybeacon_ProximitybeaconEmpty
   */
  public function delete($beaconName, $optParams = array())
  {
    $params = array('beaconName' => $beaconName);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Proximitybeacon_ProximitybeaconEmpty");
  }
  /**
   *  (beacons.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Proximitybeacon_Beacon
   */
  public function get($beaconName, $optParams = array())
  {
    $params = array('beaconName' => $beaconName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Proximitybeacon_Beacon");
  }
  /**
   *  (beacons.listBeacons)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Proximitybeacon_ListBeaconsResponse
   */
  public function listBeacons($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Proximitybeacon_ListBeaconsResponse");
  }
  /**
   *  (beacons.register)
   *
   * @param Google_Service_Proximitybeacon_Beacon $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Proximitybeacon_Beacon
   */
  public function register(Google_Service_Proximitybeacon_Beacon $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('register', array($params), "Google_Service_Proximitybeacon_Beacon");
  }
  /**
   *  (beacons.update)
   *
   * @param Google_Service_Proximitybeacon_Beacon $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Proximitybeacon_Beacon
   */
  public function update($beaconName, Google_Service_Proximitybeacon_Beacon $postBody, $optParams = array())
  {
    $params = array('beaconName' => $beaconName ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Proximitybeacon_Beacon");
  }
}
