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

class ServiceTest extends \PHPUnit\Framework\TestCase {
  // function getMemberNames()
  // function getMembers()

  // function getAllResources()
  // function getSchemas()

  // function getScopes()

  // function getModelClassName($schema_name)

  // function getSafeSchemaName($schema_name)
  // function getPropParamName($prop, $classname)
  // function iterateSchemas()

  function testKeyify() {
    $this->assertEquals('WWW_GOOGLE_COM_CALENDAR_FEEDS', Service::keyify('https://www.google.com/calendar/feeds'));
    $this->assertEquals('WWW_GOOGLE_COM_M8_FEEDS', Service::keyify('https://www.google.com/m8/feeds'));
  }

  // function isPropertyComplex($prop)
  // function isItemNodeComplex(&$items)
}
