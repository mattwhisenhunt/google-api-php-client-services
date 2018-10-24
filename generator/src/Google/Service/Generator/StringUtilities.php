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

namespace Google\Service\Generator;

class StringUtilities {
  static function ucstrip($str) {
    $str = str_replace('-', ' ', $str);
    $str = str_replace('_', ' ', $str);
    $str = ucwords($str);
    $str = str_replace(' ', '', $str);
    $str = str_replace('@', '', $str);
    return $str;
  }

  static function parseDestination($str) {
    if ($str) {
      return rtrim($str, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
    }
    else {
      $dirname  = getcwd();

      $expected = implode(DIRECTORY_SEPARATOR, ['..', 'src', 'Google', 'Service']);
      if (file_exists($dirname.DIRECTORY_SEPARATOR.$expected)) {
        return $dirname.DIRECTORY_SEPARATOR.$expected.DIRECTORY_SEPARATOR;
      }

      $vendored = implode(DIRECTORY_SEPARATOR, ['vendor', 'google', 'apiclient-services'])
        .DIRECTORY_SEPARATOR
        .$expected;
      if (file_exists($dirname.DIRECTORY_SEPARATOR.$vendored)) {
        return $dirname.DIRECTORY_SEPARATOR.$vendored.DIRECTORY_SEPARATOR;
      }

      $expected = implode(DIRECTORY_SEPARATOR, ['src', 'Google', 'Service']);
      while ($dirname != '/') {
        if (file_exists($dirname.DIRECTORY_SEPARATOR.$expected)) {
          return $dirname.DIRECTORY_SEPARATOR.$expected.DIRECTORY_SEPARATOR;
        }
        $dirname = dirname($dirname);
      }

      error_log("fatal: src/Google/Services not found (or any of the parent directories)\n".
        "Please specify a destination directory after the URL.");
      exit(1);
    }
  }
}
