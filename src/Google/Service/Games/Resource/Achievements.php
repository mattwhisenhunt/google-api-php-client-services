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
 * The "achievements" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_Service_Games(...);
 *   $achievements = $gamesService->achievements;
 *  </code>
 */
class Google_Service_Games_Resource_Achievements extends Google_Service_Resource
{
  /**
   *  (achievements.increment)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_AchievementIncrementResponse
   */
  public function increment($achievementId, $stepsToIncrement, $optParams = array())
  {
    $params = array('achievementId' => $achievementId, 'stepsToIncrement' => $stepsToIncrement);
    $params = array_merge($params, $optParams);
    return $this->call('increment', array($params), "Google_Service_Games_AchievementIncrementResponse");
  }
  /**
   *  (achievements.listAchievements)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_PlayerAchievementListResponse
   */
  public function listAchievements($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Games_PlayerAchievementListResponse");
  }
  /**
   *  (achievements.reveal)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Games_AchievementRevealResponse
   */
  public function reveal($achievementId, $optParams = array())
  {
    $params = array('achievementId' => $achievementId);
    $params = array_merge($params, $optParams);
    return $this->call('reveal', array($params), "Google_Service_Games_AchievementRevealResponse");
  }
  /**
   *  (achievements.setStepsAtLeast)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Games_AchievementSetStepsAtLeastResponse
   */
  public function setStepsAtLeast($achievementId, $steps, $optParams = array())
  {
    $params = array('achievementId' => $achievementId, 'steps' => $steps);
    $params = array_merge($params, $optParams);
    return $this->call('setStepsAtLeast', array($params), "Google_Service_Games_AchievementSetStepsAtLeastResponse");
  }
  /**
   *  (achievements.unlock)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_AchievementUnlockResponse
   */
  public function unlock($achievementId, $optParams = array())
  {
    $params = array('achievementId' => $achievementId);
    $params = array_merge($params, $optParams);
    return $this->call('unlock', array($params), "Google_Service_Games_AchievementUnlockResponse");
  }
  /**
   *  (achievements.updateMultiple)
   *
   * @param Google_Service_Games_AchievementUpdateMultipleRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Games_AchievementUpdateMultipleResponse
   */
  public function updateMultiple(Google_Service_Games_AchievementUpdateMultipleRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateMultiple', array($params), "Google_Service_Games_AchievementUpdateMultipleResponse");
  }
}
