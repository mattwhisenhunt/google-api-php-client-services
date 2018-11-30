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

namespace Google\Service\Generator\Tests {

    use Google\Service\Generator\ServiceGenerator;

    class ServiceGeneratorTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider apiProvider
         */
        public function testGenerate($outputDir, $id)
        {
            $generator = new ServiceGenerator($outputDir);
            $generator->generate(__DIR__ . "/baselines/$id.json");

            $it = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($outputDir));
            $it->rewind();
            while($it->valid()) {
                if ($it->isFile() && file_exists(__DIR__ . '/baselines/' . $it->getSubPathName())) {
                    $this->assertTrue(
                        file_get_contents($it->getPathname()) == 
                        file_get_contents(__DIR__ . '/baselines/' . $it->getSubPathName())
                    );
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

            $generator = new ServiceGenerator('bad_path');
            error_log(PHP_EOL . ' *** Expected stderr ***');
            $generator->generate('');
            error_log(' *** End of Expected ***');
            $this->assertTrue(true);

            ini_set('error_reporting', $previous['error_reporting']);
            ini_set('display_errors', $previous['display_errors']);
        }

        public function apiProvider() {
            $tmpPath = sys_get_temp_dir() . '/gs_tests/t' . rand();

            $data = [
                [$tmpPath, 'admin-directory_v1'],
                [$tmpPath, 'pagespeedonline-v5'],
                [$tmpPath, 'script-v1'],
                [$tmpPath, 'books-v1'],
                [$tmpPath, 'oauth-v2'],
                [$tmpPath, 'safebrowsing-v4'],
                [$tmpPath, 'translate-v2'],
                [$tmpPath, 'doubleclicksearch-v2'],
                [$tmpPath, 'fusiontables-v2'],
            ];
            return $data;
        }
    }
}
