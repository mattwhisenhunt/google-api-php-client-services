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

use Google\Service\Generator\ServiceGenerator;

class ServiceGeneratorTest extends \PHPUnit\Framework\TestCase
{
    public function testGenerate()
    {
        if (getenv('GOOGLE_PHP_CLIENT_CODE_COVERAGE')) {
            $apis = json_decode(file_get_contents("https://www.googleapis.com/discovery/v1/apis"));
            $neerdowells = [
                'compute:alpha',
                'cloudbuild:v1alpha1',
                'cloudiot:v1beta1',
                'cloudscheduler:v1beta1',
                'cloudtrace:v2alpha1',
                'partners:v2',
                'websecurityscanner:v1beta'];

            foreach ($apis->items as $v) {
                if (in_array($v->id, $neerdowells)) continue;
                $generator = new ServiceGenerator(".tests/$v->id");
                $generator->generate($v->discoveryRestUrl);
                $this->assertTrue(count(scandir(".tests/$v->id")) > 2);
            }
        } else {
            $generator = new ServiceGenerator('.tests/gmail:v1');
            $result = $generator->generate(
                'https://www.googleapis.com/discovery/v1/apis/gmail/v1/rest'
            );
        }
    }

    public function testErrorHandler()
    {
        if (getenv('GOOGLE_PHP_CLIENT_CODE_COVERAGE')) {
            $old = [];
            $old['error_reporting'] = ini_get('error_reporting');
            $old['display_errors'] = ini_get('display_errors');

            ini_set('error_reporting', 'E_ALL');
            ini_set('display_errors', '1');

            $generator = new ServiceGenerator();
            error_log(PHP_EOL . ' *** Expected stderr ***');
            $generator->generate('');
            error_log(' *** End of Expected ***');
            $this->assertTrue(true);

            ini_set('error_reporting', $old['error_reporting']);
            ini_set('display_errors', $old['display_errors']);
        } else {
            $skip = "This tests for errors being piped to stderr instead ".
                "of Smarty output even when display_errors is enabled ".
                "and can be enabled by setting the ".
                "GOOGLE_PHP_CLIENT_CODE_COVERAGE environment variable.";
            $this->markTestSkipped($skip);
        }
    }
}
