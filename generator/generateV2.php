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

ob_start();

$s = 's';
$longest = 86;

$apis = json_decode(file_get_contents("https://www.googleapis.com/discovery/v1/apis"));

foreach($apis->items as $v){
  if ($v->preferred) {
    if ($v->name == 'discovery') continue;

    if (strlen($v->discoveryRestUrl)+2 > $longest) {
      $longest = strlen($v->discoveryRestUrl)+2;
      error_log('$longest = '. "$longest;");
    }

    printf("php generateV2_service.php %-$longest$s & pids[%3d]=$!\n", "'".$v->discoveryRestUrl."'", ++$i);
  }
}

$lines = ob_get_clean();
?>
#!/bin/bash
<?=$lines?>
for pid in ${pids[*]}; do
  wait $pid
done
