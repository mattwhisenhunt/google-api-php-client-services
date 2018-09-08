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

require 'definitions.php';
require 'functions.schemas.php';
require 'functions.resources.php';

function keyify($k) {
  $ret = strtoupper(str_replace(".", "_", trim($k, "https:")));
  return trim(str_replace("/", "_", $ret), "_") . "S";
}

$doc = json_decode(file_get_contents($argv[1]), 1);

define("DEST", "../src/Google/Service/");

if (!$doc['canonicalName']) {
  $doc['canonicalName'] = $doc['name'];
}
$CapCan = ucStrip($doc['canonicalName']);

foreach ($doc['parameters'] as $k => $v) {
  $parameter_types[$v['type']] += 1;
  $locations[$v['location']] += 1;
}

$schemas = $doc['schemas'];

foreach ($doc['schemas'] as $k => $v) {
  rootSchema($k);
}

$scopes = [];
$all_resources = [];
foreach ($doc['resources'] as $k => $v) {
  walkResource([$k]);
}

ksort($scopes);
$real_scopes = [];
foreach ($scopes as $k => $v) {
  $guts = explode("/", rtrim($k,'/')); // rtrim for just domain scopes

  $li = count($guts) -1;

  $shortKey = strtoupper($guts[$li]);
  $shortKey = str_replace('-', '_', $shortKey);
  $shortKey = str_replace('.', '_', $shortKey);
  if ($real_scopes[$shortKey]) {
    $oldKey  = keyify($real_scopes[$shortKey][0]);
    $longKey = keyify($k);
    $real_scopes[$oldKey]  = $real_scopes[$shortKey];
    $real_scopes[$longKey] = [$k, $doc['auth']['oauth2']['scopes'][$k]["description"]];
    unset($real_scopes[$shortKey]);
  } else {
    $real_scopes[$shortKey] = [$k, $doc['auth']['oauth2']['scopes'][$k]["description"]];
  }
}
ksort($all_resources);

ob_start();
include '_Service.php';
file_put_contents(DEST. "$CapCan.php", ob_get_clean());
