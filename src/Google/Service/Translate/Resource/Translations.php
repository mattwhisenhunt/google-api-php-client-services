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
 * The "translations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $translateService = new Google_Service_Translate(...);
 *   $translations = $translateService->translations;
 *  </code>
 */
class Google_Service_Translate_Resource_Translations extends Google_Service_Resource
{
  /**
   *  (translations.listTranslations)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Translate_TranslationsListResponse
   */
  public function listTranslations($q, $target, $optParams = array())
  {
    $params = array('q' => $q, 'target' => $target);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Translate_TranslationsListResponse");
  }
  /**
   *  (translations.translate)
   *
   * @param Google_Service_Translate_TranslateTextRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Translate_TranslationsListResponse
   */
  public function translate(Google_Service_Translate_TranslateTextRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('translate', array($params), "Google_Service_Translate_TranslationsListResponse");
  }
}
