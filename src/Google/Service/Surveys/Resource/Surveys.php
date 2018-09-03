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
 * The "surveys" collection of methods.
 * Typical usage is:
 *  <code>
 *   $surveysService = new Google_Service_Surveys(...);
 *   $surveys = $surveysService->surveys;
 *  </code>
 */
class Google_Service_Surveys_Resource_Surveys extends Google_Service_Resource
{
  /**
   *  (surveys.delete)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Surveys_SurveysDeleteResponse
   */
  public function delete($surveyUrlId, $optParams = array())
  {
    $params = array('surveyUrlId' => $surveyUrlId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Surveys_SurveysDeleteResponse");
  }
  /**
   *  (surveys.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Surveys_Survey
   */
  public function get($surveyUrlId, $optParams = array())
  {
    $params = array('surveyUrlId' => $surveyUrlId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Surveys_Survey");
  }
  /**
   *  (surveys.insert)
   *
   * @param Google_Service_Surveys_Survey $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Surveys_Survey
   */
  public function insert(Google_Service_Surveys_Survey $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Surveys_Survey");
  }
  /**
   *  (surveys.listSurveys)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Surveys_SurveysListResponse
   */
  public function listSurveys($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Surveys_SurveysListResponse");
  }
  /**
   *  (surveys.start)
   *
   * @param Google_Service_Surveys_SurveysStartRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Surveys_SurveysStartResponse
   */
  public function start($resourceId, Google_Service_Surveys_SurveysStartRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('start', array($params), "Google_Service_Surveys_SurveysStartResponse");
  }
  /**
   *  (surveys.stop)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Surveys_SurveysStopResponse
   */
  public function stop($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('stop', array($params), "Google_Service_Surveys_SurveysStopResponse");
  }
  /**
   *  (surveys.update)
   *
   * @param Google_Service_Surveys_Survey $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Surveys_Survey
   */
  public function update($surveyUrlId, Google_Service_Surveys_Survey $postBody, $optParams = array())
  {
    $params = array('surveyUrlId' => $surveyUrlId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Surveys_Survey");
  }
}
