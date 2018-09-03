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
 * The "questMilestones" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $questMilestones = $gamesService->questMilestones;
 *  </code>
 */
class Google_Service_Games_Resource_QuestMilestones extends Google_Service_Resource
{
  /**
   *  (questMilestones.claim)
   *
   * @param array $optParams Optional parameters.

   */
  public function claim($questId, $milestoneId, $requestId, $optParams = array())
  {
    $params = array('questId' => $questId, 'milestoneId' => $milestoneId, 'requestId' => $requestId);
    $params = array_merge($params, $optParams);
    return $this->call('claim', array($params));
  }
}
