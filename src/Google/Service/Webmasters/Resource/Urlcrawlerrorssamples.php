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
 * The "urlcrawlerrorssamples" collection of methods.
 * Typical usage is:
 *  <code>
 *   $webmastersService = new Google_Service_Webmasters(...);
 *   $urlcrawlerrorssamples = $webmastersService->urlcrawlerrorssamples;
 *  </code>
 */
class Google_Service_Webmasters_Resource_Urlcrawlerrorssamples extends Google_Service_Resource
{
  /**
   *  (urlcrawlerrorssamples.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Webmasters_UrlCrawlErrorsSample
   */
  public function get($siteUrl, $url, $category, $platform, $optParams = array())
  {
    $params = array('siteUrl' => $siteUrl, 'url' => $url, 'category' => $category, 'platform' => $platform);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Webmasters_UrlCrawlErrorsSample");
  }
  /**
   *  (urlcrawlerrorssamples.listUrlcrawlerrorssamples)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Webmasters_UrlCrawlErrorsSamplesListResponse
   */
  public function listUrlcrawlerrorssamples($siteUrl, $category, $platform, $optParams = array())
  {
    $params = array('siteUrl' => $siteUrl, 'category' => $category, 'platform' => $platform);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Webmasters_UrlCrawlErrorsSamplesListResponse");
  }
  /**
   *  (urlcrawlerrorssamples.markAsFixed)
   *
   * @param array $optParams Optional parameters.

   */
  public function markAsFixed($siteUrl, $url, $category, $platform, $optParams = array())
  {
    $params = array('siteUrl' => $siteUrl, 'url' => $url, 'category' => $category, 'platform' => $platform);
    $params = array_merge($params, $optParams);
    return $this->call('markAsFixed', array($params));
  }
}
