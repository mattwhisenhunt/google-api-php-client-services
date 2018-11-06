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

use Google\Service\Generator\ServiceGenerator;
use Google\Service\Generator\Service;

class ServiceGeneratorTest extends \PHPUnit\Framework\TestCase {
  
  function testGenerateAll() {
    if (is_dir('.test/Tasks/Resource')) {
      unlink('.test/Tasks/Resource/Tasks.php');
      unlink('.test/Tasks/Resource/Tasklists.php');
      rmdir('.test/Tasks/Resource');
    }
    (new ServiceGenerator('.test'))->generateAll();
    $this->assertFileExists('.test/Drive.php');
    $this->assertFileExists('.test/Tasks.php');
    $this->assertFileExists('.test/Tasks/Resource/Tasks.php');
    $this->assertFileExists('.test/Tasks/Resource/Tasklists.php');
  }

  function testErrorHandler() {
    $generator = new ServiceGenerator();
    error_log("\n *** Expected stderr ***");
    $generator->generate('');
    error_log(" *** End of Expected ***");
    $this->assertTrue(true);
  }
}
