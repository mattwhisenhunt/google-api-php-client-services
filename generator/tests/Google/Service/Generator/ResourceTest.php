<?php
// Copyright 2018 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     https://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace Google\Service\Generator;

class ResourceTest extends \PHPUnit\Framework\TestCase {
  private $emptyNode = [];

  function testGetClassName() {
    $names = ['bidders',
              'accounts',
              'filterSets',
              'filteredBids',
              'creatives'];
    $r = new Resource($names, $empty_node);

    $deep_node = [
      'resources' => ['accounts' => [
        'resources' => ['filterSets' => [
          'resources' => ['filteredBids' => [
            'resources' => ['creatives' => []]]]]]]]];
    $rparent = new Resource(['bidders'], $deep_node);
    $rdeep = $rparent->getAllResources()[4];

    $this->assertEquals('BiddersAccountsFilterSetsFilteredBidsCreatives', $r->getClassName());
    $this->assertEquals('BiddersAccountsFilterSetsFilteredBidsCreatives', $rdeep->getClassName());
  }

  // function getLiteralName() {
  //   return $this->names[count($this->names)-1];
  // }
  //
  // function getMemberName() {
  //   return implode("_", $this->names);
  // }
  //
  // function getScopes() {
  //   $arr = $this->scopes;
  //   foreach ($this->resources as $resource) {
  //     $arr = array_merge($arr, $resource->getScopes());
  //   }
  //   return $arr;
  // }
  //
  // function getMemberNames() {
  //   $arr = [];
  //   if (count($this->methods) > 0) {
  //     $arr[] = $this->getMemberName();
  //   }
  //   foreach ($this->resources as $resource) {
  //     $arr = array_merge($arr, $resource->getMemberNames());
  //   }
  //   return $arr;
  // }
  //
  // function getMembers() {
  //   $arr = [];
  //   if (count($this->methods) > 0) {
  //     $arr[] = $this;
  //   }
  //   foreach ($this->resources as $resource) {
  //     $arr = array_merge($arr, $resource->getMembers());
  //   }
  //   return $arr;
  // }
  //
  // function getAllResources() {
  //   $arr = [$this];
  //
  //   foreach ($this->resources as $resource) {
  //     $arr = array_merge($arr, $resource->getAllResources());
  //   }
  //   return $arr;
  // }

  function testGetFnName() {
    $empty = [];
    $r = new Resource(['Photos'], $this->emptyNode);

    $this->assertEquals('get', $r->getFnName('get'));
    $this->assertEquals('delete', $r->getFnName('delete'));

    $this->assertEquals('listPhotos', $r->getFnName('list'));
    $this->assertEquals('returnPhotos', $r->getFnName('return'));
    $this->assertEquals('clonePhotos', $r->getFnName('clone'));
    $this->assertEquals('unsetPhotos', $r->getFnName('unset'));
    $this->assertEquals('callPhotos', $r->getFnName('call'));
  }
}
