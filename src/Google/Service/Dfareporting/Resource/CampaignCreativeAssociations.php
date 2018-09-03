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
 * The "campaignCreativeAssociations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_Service_Dfareporting(...);
 *   $campaignCreativeAssociations = $dfareportingService->campaignCreativeAssociations;
 *  </code>
 */
class Google_Service_Dfareporting_Resource_CampaignCreativeAssociations extends Google_Service_Resource
{
  /**
   *  (campaignCreativeAssociations.insert)
   *
   * @param Google_Service_Dfareporting_CampaignCreativeAssociation $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_CampaignCreativeAssociation
   */
  public function insert($profileId, $campaignId, Google_Service_Dfareporting_CampaignCreativeAssociation $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'campaignId' => $campaignId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Dfareporting_CampaignCreativeAssociation");
  }
  /**
   *  (campaignCreativeAssociations.listCampaignCreativeAssociations)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Dfareporting_CampaignCreativeAssociationsListResponse
   */
  public function listCampaignCreativeAssociations($profileId, $campaignId, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'campaignId' => $campaignId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dfareporting_CampaignCreativeAssociationsListResponse");
  }
}
