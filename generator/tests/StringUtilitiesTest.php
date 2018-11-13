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

use Google\Service\Generator\StringUtilities;

class StringUtilitiesTest extends \PHPUnit\Framework\TestCase
{

    public function testUcstrip()
    {
        $this->assertEquals('Id', StringUtilities::ucstrip('id'));
        $this->assertEquals('GoogleCloudMlV1Location', StringUtilities::ucstrip('GoogleCloudMlV1__Location'));
        $this->assertEquals('Ipv4Enabled', StringUtilities::ucstrip('ipv4Enabled'));
        $this->assertEquals('context', StringUtilities::ucstrip('@context'));
        $this->assertEquals('LabelWithOp', StringUtilities::ucstrip('label_with_op'));
        $this->assertEquals('StartDate', StringUtilities::ucstrip('start-date'));
    }

    /**
     * @dataProvider docBlockProvider
     */
    public function testCommentWordwrap($str, $expected)
    {
        $this->assertEquals($expected, StringUtilities::commentWordwrap($str));
    }

    public function docBlockProvider()
    {
        return [
        ["\n\n"
        ,'   *'. PHP_EOL .'   *'. PHP_EOL .'   *'],

        ["\nA lone line.\n"
        ,'   *'. PHP_EOL .'   * A lone line.'. PHP_EOL .'   *'],

        ['*/'
        ,'   * {@*}'],

        ['projects/*/locations/*/other/*'
        ,'   * projects/{@*}locations/{@*}other/*'],

        ];
    }
}
