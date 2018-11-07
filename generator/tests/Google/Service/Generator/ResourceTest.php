<?php
/**
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Service\Generator\Test;

use Google\Service\Generator\Resource;

class ResourceTest extends \PHPUnit\Framework\TestCase
{
    private $emptyNode = [];

    /**
     * @dataProvider flatProvider
     */
    public function testTemplateGetters(
        $name,
        $node,
        $exp_ClassName,
        $exp_MemberName,
        $exp_LiteralName
    ) {
        $resource = new Resource($name, $node);
        $this->assertEquals($exp_ClassName, $resource->getClassName());
        $this->assertEquals($exp_MemberName, $resource->getMemberName());
        $this->assertEquals($exp_LiteralName, $resource->getLiteralName());

        $this->assertEquals('list'.$exp_ClassName, $resource->getFnName('list'));
        $this->assertEquals('clone'.$exp_ClassName, $resource->getFnName('clone'));
        $this->assertEquals('unset'.$exp_ClassName, $resource->getFnName('unset'));
        $this->assertEquals('update', $resource->getFnName('update'));
        $this->assertEquals('encrypt', $resource->getFnName('encrypt'));
    }

    /**
     * @dataProvider multiLevelProvider
     */
    public function testTemplateGetters2(
        $name,
        $node,
        $exp_ClassName,
        $exp_MemberName,
        $exp_LiteralName
    ) {
        $parent = new Resource($name, $node);
        $arr = $parent->getAllResources();
        $resource = array_pop($arr);
        $this->assertEquals($exp_ClassName, $resource->getClassName());
        $this->assertEquals($exp_MemberName, $resource->getMemberName());
        $this->assertEquals($exp_LiteralName, $resource->getLiteralName());

        $this->assertEquals('list'.$exp_ClassName, $resource->getFnName('list'));
        $this->assertEquals('clone'.$exp_ClassName, $resource->getFnName('clone'));
        $this->assertEquals('unset'.$exp_ClassName, $resource->getFnName('unset'));
        $this->assertEquals('update', $resource->getFnName('update'));
        $this->assertEquals('encrypt', $resource->getFnName('encrypt'));
    }

    public function testGetFnName()
    {
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

    /**
     * @dataProvider multiLevelProvider
     */
    public function testGetAllResources(
        $name,
        $node,
        $exp_ClassName,
        $exp_MemberName,
        $exp_LiteralName,
        $exp_count
    ) {
        $r = new Resource($name, $node);
        $this->assertCount($exp_count, $r->getAllResources());
    }

    /**
     * @dataProvider withMethodProvider
     */
    public function testCollectionMethods(
        $name,
        $node,
        $exp_count
    ) {
        $r = new Resource($name, $node);
        foreach ($r->getMemberNames() as $str) {
            $this->assertTrue(is_string($str));
        }
        foreach ($r->getMembers() as $resource) {
            $this->assertTrue(is_a($resource, 'Google\Service\Generator\Resource'));
        }

        $this->assertCount($exp_count, $r->getMembers());
    }

    public function flatProvider()
    {
        return [
        [ ['accounts','containers','workspaces','built_in_variables'],
        [],
        'AccountsContainersWorkspacesBuiltInVariables',
        'accounts_containers_workspaces_built_in_variables',
        'built_in_variables',
        ],
        [ ['bidders','accounts','filterSets','filteredBids','creatives'],
        [],
        'BiddersAccountsFilterSetsFilteredBidsCreatives',
        'bidders_accounts_filterSets_filteredBids_creatives',
        'creatives',
        ],
        [ ['projects'],
        [],
        'Projects',
        'projects',
        'projects',
        ],
        [ ['v2'],
        [],
        'V2',
        'v2',
        'v2',
        ],
        [ ['userinfo','v2','me'],
        [],
        'UserinfoV2Me',
        'userinfo_v2_me',
        'me',
        ],
        ];
    }

    public function multiLevelProvider()
    {
        return [
        [ ['accounts'],
        ['resources' => ['containers' => [
          'resources' => ['workspaces' => [
            'resources' => ['built_in_variables' => []]]]]]],
        'AccountsContainersWorkspacesBuiltInVariables',
        'accounts_containers_workspaces_built_in_variables',
        'built_in_variables',
        4,
        ],
        [ ['bidders'],
        ['resources' => ['accounts' => [
          'resources' => ['filterSets' => [
            'resources' => ['filteredBids' => [
              'resources' => ['creatives' => []]]]]]]]],
        'BiddersAccountsFilterSetsFilteredBidsCreatives',
        'bidders_accounts_filterSets_filteredBids_creatives',
        'creatives',
        5,
        ],
        [ ['projects'],
        [],
        'Projects',
        'projects',
        'projects',
        1,
        ],
        [ ['v2'],
        [],
        'V2',
        'v2',
        'v2',
        1,
        ],
        [ ['userinfo'],
        ['resources' => ['v2' => [
          'resources' => ['me' => []]]]],
        'UserinfoV2Me',
        'userinfo_v2_me',
        'me',
        3,
        ],
        ];
    }

    public function withMethodProvider()
    {
        return [
        [ ['accounts'], // one level deep
        ['resources' => ['containers' => [
          'methods' => mthd('list'), 'resources' => ['workspaces' => [
            'resources' => ['built_in_variables' => []]]]]]],
        1,
        ],
        [ ['bidders'], // four levels deep
        ['resources' => ['accounts' => [
          'resources' => ['filterSets' => [
            'resources' => ['filteredBids' => [
              'resources' => ['creatives' => [ 'methods' => mthd('list')]]]]]]]]],
        1,
        ],
        [ ['projects'], // direct member
        ['methods'=> mthds(['create','get','update','delete'])],
        1,
        ],
        [ ['v2'],
        [],
        0,
        ],
        [ ['userinfo'], // direct member and deeper
        ['methods' => mthd('list'), 'resources' => ['v2' => [
          'resources' => ['me' => ['methods' => mthd('list')]]]]],
        2,
        ],
        ];
    }
}

function mthd($name)
{
    return [$name=> ['id'=>'id', 'path'=>'path', 'httpMethod'=>'GET']];
}

function mthds($names)
{
    $arr = [];
    foreach ($names as $name) {
        $arr[$name] = ['id'=>'id', 'path'=>'path', 'httpMethod'=>'GET'];
    }
    return $arr;
}
