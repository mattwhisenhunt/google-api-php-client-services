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
 * The "posts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bloggerService = new Google_Service_Blogger(...);
 *   $posts = $bloggerService->posts;
 *  </code>
 */
class Google_Service_Blogger_Resource_Posts extends Google_Service_Resource
{
  /**
   *  (posts.delete)
   *
   * @param array $optParams Optional parameters.

   */
  public function delete($blogId, $postId, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'postId' => $postId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   *  (posts.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Blogger_Post
   */
  public function get($blogId, $postId, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'postId' => $postId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Blogger_Post");
  }
  /**
   *  (posts.getByPath)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Blogger_Post
   */
  public function getByPath($blogId, $path, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'path' => $path);
    $params = array_merge($params, $optParams);
    return $this->call('getByPath', array($params), "Google_Service_Blogger_Post");
  }
  /**
   *  (posts.insert)
   *
   * @param Google_Service_Blogger_Post $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Blogger_Post
   */
  public function insert($blogId, Google_Service_Blogger_Post $postBody, $optParams = array())
  {
    $params = array('blogId' => $blogId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Blogger_Post");
  }
  /**
   *  (posts.listPosts)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Blogger_PostList
   */
  public function listPosts($blogId, $optParams = array())
  {
    $params = array('blogId' => $blogId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Blogger_PostList");
  }
  /**
   *  (posts.patch)
   *
   * @param Google_Service_Blogger_Post $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Blogger_Post
   */
  public function patch($blogId, $postId, Google_Service_Blogger_Post $postBody, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'postId' => $postId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Blogger_Post");
  }
  /**
   *  (posts.publish)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Blogger_Post
   */
  public function publish($blogId, $postId, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'postId' => $postId);
    $params = array_merge($params, $optParams);
    return $this->call('publish', array($params), "Google_Service_Blogger_Post");
  }
  /**
   *  (posts.revert)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Blogger_Post
   */
  public function revert($blogId, $postId, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'postId' => $postId);
    $params = array_merge($params, $optParams);
    return $this->call('revert', array($params), "Google_Service_Blogger_Post");
  }
  /**
   *  (posts.search)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Blogger_PostList
   */
  public function search($blogId, $q, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'q' => $q);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_Blogger_PostList");
  }
  /**
   *  (posts.update)
   *
   * @param Google_Service_Blogger_Post $postBody
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_Blogger_Post
   */
  public function update($blogId, $postId, Google_Service_Blogger_Post $postBody, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'postId' => $postId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Blogger_Post");
  }
}
