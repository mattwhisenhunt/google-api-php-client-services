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

class SchemaPropertyTest extends \PHPUnit\Framework\TestCase {

  function testGetTypePrefix() {
    $array_node = ['type'=>'array', 'items'=>['type'=>'string','enum'=>[]]];
    $array_empty_node = ['type'=>'array', 'items'=>[]];
    $array_single_node = ['type'=>'array', 'items'=>['$ref'=>'ComplexType']];
    $array_single_taboo_node = ['type'=>'array', 'items'=>['$ref'=>'Namespace']];

    $spropA = new SchemaProperty("Classname", "", $array_node);
    $spropB = new SchemaProperty("Classname", "", $array_empty_node);
    $spropC = new SchemaProperty("Proximitybeacon", "namespaces", $array_single_node);
    $spropD = new SchemaProperty("Proximitybeacon", "namespaces", $array_single_taboo_node);

    $this->assertEquals("Prefix", $spropA->getTypePrefix('Prefix'));
    $this->assertEmpty($spropB->getTypePrefix('Prefix'));
    $this->assertEmpty($spropC->getTypePrefix('Bucket'));
    $this->assertEquals("Proximitybeacon", $spropD->getTypePrefix('Bucket'));
  }
}
