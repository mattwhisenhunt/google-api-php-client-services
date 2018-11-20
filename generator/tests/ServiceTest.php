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

namespace Google\Service\Generator\Tests;

use Google\Service\Generator\Resource;
use Google\Service\Generator\Service;
use Google\Service\Generator\SchemaProperty;

class ServiceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider memberNamesProvider
     */
    public function testGetMemberNames($service, $subset)
    {
        $this->assertArraySubset($service->getMemberNames(), $subset);
    }

    /**
     * @dataProvider rscCountProvider
     */
    public function testResourceGetters($service, $toplevel, $allresources)
    {
        foreach ($service->getMembers() as $resource) {
            $this->assertInstanceOf(Resource::class, $resource);
        }
        foreach ($service->getAllResources() as $resource) {
            $this->assertInstanceOf(Resource::class, $resource);
        }
        $this->assertCount($toplevel, $service->getMembers());
        $this->assertCount($allresources, $service->getAllResources());
    }

    /**
     * @dataProvider schemaProvider
     */
    public function testGetSchemas($service, $schema_count, $names)
    {
        foreach ($service->getSchemas() as $schema) {
            $this->assertTrue(is_a($schema, 'Google\Service\Generator\Schema'));
            $this->assertContains($schema->getName(), $names);
        }
        $this->assertCount($schema_count, $service->getSchemas());
        $this->assertCount(count($names), $service->getSchemas());
    }

    /**
     * @dataProvider scopesProvider
     */
    public function testGetScopes($service, $key, $urlDesc)
    {
        $scopes = $service->getScopes();

        $this->assertArraySubset($scopes[$key], $urlDesc);
        $this->assertCount(2, $scopes[$key]);
    }

    public function testGetSafeSchemaName()
    {
        $docPath = Fixtures::COMPLETE_DOC_FIXTURE();
        $json = json_decode(file_get_contents($docPath), true);
        $service = new Service($json);

        $this->assertEquals('TasksNamespace', $service->getSafeSchemaName('Namespace'));
        $this->assertEquals('TasksEmpty', $service->getSafeSchemaName('Empty'));
        $this->assertEquals('TasksObject', $service->getSafeSchemaName('Object'));

        $this->assertEquals('Objects', $service->getSafeSchemaName('Objects'));
        $this->assertEquals('Task', $service->getSafeSchemaName('Task'));
        $this->assertEquals('TaskLinks', $service->getSafeSchemaName('TaskLinks'));
    }

    public function testKeyify()
    {
        $this->assertEquals('WWW_GOOGLE_COM_CALENDAR_FEEDS', Service::keyify('https://www.google.com/calendar/feeds'));
        $this->assertEquals('WWW_GOOGLE_COM_M8_FEEDS', Service::keyify('https://www.google.com/m8/feeds'));
    }

    public function testIsPropertyComplex()
    {
        $docPath = Fixtures::COMPLETE_DOC_FIXTURE();
        $json = json_decode(file_get_contents($docPath), true);
        $service = new Service($json);

        $node = ['properties'=> []];
        $prop = new SchemaProperty("", "", $node);
        $this->assertTrue($service->isPropertyComplex($prop));

        $node = ['additionalProperties'=> ['$ref'=>'Task']];
        $prop = new SchemaProperty("", "", $node);
        $this->assertTrue($service->isPropertyComplex($prop));

        $node = ['$ref'=>'Task'];
        $prop = new SchemaProperty("", "", $node);
        $this->assertTrue($service->isPropertyComplex($prop));

        $node = ['dataType'=>'map'];
        $prop = new SchemaProperty("", "", $node);
        $this->assertTrue($service->isPropertyComplex($prop));

        // tests isItemNodeComplex too
        $node = ['items'=>['type' => 'VpnTunnel']];
        $prop = new SchemaProperty("", "", $node);
        $this->assertTrue($service->isPropertyComplex($prop));

        // tests isItemNodeComplex too
        $node = ['additionalProperties'=>['items'=>['type' => 'Query']]];
        $prop = new SchemaProperty("", "", $node);
        $this->assertTrue($service->isPropertyComplex($prop));

        $this->assertFalse($service->isPropertyComplex(null));

        $node = ['additionalProperties'=> ['$ref'=>'JsonValue']];
        $prop = new SchemaProperty("", "", $node);
        $this->assertFalse($service->isPropertyComplex($prop));

        $node = ['$ref'=>'JsonObject'];
        $prop = new SchemaProperty("", "", $node);
        $this->assertFalse($service->isPropertyComplex($prop));

        // tests isItemNodeComplex too
        $node = ['items'=>['type' => 'string']];
        $prop = new SchemaProperty("", "", $node);
        $this->assertFalse($service->isPropertyComplex($prop));

        // tests isItemNodeComplex too
        $node = ['additionalProperties'=>['items'=>['type' => 'any']]];
        $prop = new SchemaProperty("", "", $node);
        $this->assertFalse($service->isPropertyComplex($prop));

        // tests isItemNodeComplex too
        $node = ['additionalProperties'=>[
        'type' => 'object',
        'additionalProperties' => ['type' => 'any']]];
        $prop = new SchemaProperty("", "", $node);
        $this->assertFalse($service->isPropertyComplex($prop));
    }

    public function memberNamesProvider()
    {
        $docPath = Fixtures::COMPLETE_DOC_FIXTURE();
        $json = json_decode(file_get_contents($docPath), true);
        $service = new Service($json);
        return [
            [$service, ['tasklists', 'tasks']],
        ];
    }

    public function rscCountProvider()
    {
        $docPath = Fixtures::COMPLETE_DOC_FIXTURE();
        $json = json_decode(file_get_contents($docPath), true);
        $service = new Service($json);
        return [
            [$service, 2, 2],
        ];
    }

    public function schemaProvider()
    {
        $docPath = Fixtures::COMPLETE_DOC_FIXTURE();
        $json = json_decode(file_get_contents($docPath), true);
        $service = new Service($json);
        return [
            [$service, 5, ['Task','TaskLinks','TaskList','TaskLists','Tasks']],
        ];
    }

    public function scopesProvider()
    {
        $docPath = Fixtures::COMPLETE_DOC_FIXTURE();
        $json = json_decode(file_get_contents($docPath), true);
        $service = new Service($json);
        return [
            [$service, 'TASKS', ['https://www.googleapis.com/auth/tasks', 'Manage your tasks']],
            [$service, 'TASKS_READONLY', ['https://www.googleapis.com/auth/tasks.readonly', 'View your tasks']]
        ];
    }
}
