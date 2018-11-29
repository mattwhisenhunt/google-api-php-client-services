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

namespace {
    class Google_Model {}
    class Google_Service {}
    class Google_Collection {}
    class Google_Service_Resource{}
};

namespace Google\Service\Generator\Tests {

    use Google\Service\Generator\ServiceGenerator;

    class ServiceGeneratorTest extends \PHPUnit\Framework\TestCase
    {
        const NEER_DO_WELLS = [
            'compute:alpha',
            'cloudbuild:v1alpha1',
            'cloudiot:v1beta1',
            'cloudscheduler:v1beta1',
            'cloudtrace:v2alpha1',
            'partners:v2',
            'websecurityscanner:v1beta',
        ];

        /**
         * @dataProvider apiProvider
         */
        public function testGenerate($id, $discoveryRestUrl)
        {
            $path = sys_get_temp_dir() . '/gs_tests/t' . rand() . "/$id";
            $generator = new ServiceGenerator($path);
            $generator->generate($discoveryRestUrl);

            $it = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));

            $it->rewind();
            while($it->valid()) {

                if ($it->isFile() && $it->getExtension() == 'php') {
                    $this->assertTrue( 1 === (include $it->getPathname()) );
                }

                $it->next();
            }
        }

        public function testErrorHandler()
        {
            $previous = [];
            $previous['error_reporting'] = ini_get('error_reporting');
            $previous['display_errors'] = ini_get('display_errors');

            ini_set('error_reporting', 'E_ALL');
            ini_set('display_errors', '1');

            $generator = new ServiceGenerator();
            error_log(PHP_EOL . ' *** Expected stderr ***');
            $generator->generate('');
            error_log(' *** End of Expected ***');
            $this->assertTrue(true);

            ini_set('error_reporting', $previous['error_reporting']);
            ini_set('display_errors', $previous['display_errors']);
        }

        public function apiProvider() {
            $apis = json_decode(file_get_contents("https://www.googleapis.com/discovery/v1/apis"));

            $data = [
                ['admin:datatransfer_v1', 'https://www.googleapis.com/discovery/v1/apis/admin/datatransfer_v1/rest'],
                ['admin:directory_v1', 'https://www.googleapis.com/discovery/v1/apis/admin/directory_v1/rest'],
            ];
            foreach ($apis->items as $v) {
                if (in_array($v->id, ServiceGeneratorTest::NEER_DO_WELLS)) continue;
                if (!$v->preferred) continue;
                $data[] = ["$v->name-$v->version", $v->discoveryRestUrl];
            }
            return $data;
        }
    }
}
