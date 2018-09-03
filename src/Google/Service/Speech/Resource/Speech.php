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
 * The "speech" collection of methods.
 * Typical usage is:
 *  <code>
 *   $speechService = new Google_Service_Speech(...);
 *   $speech = $speechService->speech;
 *  </code>
 */
class Google_Service_Speech_Resource_Speech extends Google_Service_Resource
{
  /**
   *  (speech.longrunningrecognize)
   *
   * @param Google_Service_Speech_LongRunningRecognizeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Speech_Operation
   */
  public function longrunningrecognize(Google_Service_Speech_LongRunningRecognizeRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('longrunningrecognize', array($params), "Google_Service_Speech_Operation");
  }
  /**
   *  (speech.recognize)
   *
   * @param Google_Service_Speech_RecognizeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Speech_RecognizeResponse
   */
  public function recognize(Google_Service_Speech_RecognizeRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('recognize', array($params), "Google_Service_Speech_RecognizeResponse");
  }
}
