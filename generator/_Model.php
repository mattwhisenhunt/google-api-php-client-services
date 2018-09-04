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

ksort($node['properties']);
foreach ($node['properties'] as $name => &$_) {
  $_['Name'] = $name;
  $_['GetSetName'] = $name;

  $type_pos = strpos($name, "Type");
  $sibling  = $node['properties'][substr($name, 0, $type_pos)];
  if ($type_pos === strlen($name) - 4
  && $sibling && is_property_complex($sibling)) {
    $_['Name'] = "theReal" . ucStrip($name);
    $_['GetSetName'] = $name;
    $internal_gapi_mappings[$name] = $_['Name'];
  } else {
    $internal_mapping = map_internally($name);
  }

  if ($internal_mapping != '') {
    $internal_gapi_mappings[$internal_mapping] = $name;
    $_['Name'] = $internal_mapping;
    $_['GetSetName'] = $internal_mapping;
  }

  if ($_['type'] == 'array') {
    $collection_key = $name; //TODO suspect
    $_['TypeName'] = ucStrip($_['items']['$ref']);
    $_['DataType'] = 'array';

    if (count($_['items']) > 1) {
      $_['TypePrfx'] = $fn;
      $_['TypeName'] = ucStrip($name);
    } else {
      if ($_['items']['$ref']
      && $doc['schemas'][$_['items']['$ref']]['type'] == 'array') {
        $_['TypeName'] .= "Items";
      }
    }
  }

  if ($_['$ref'] && $_['type'] != 'array') {
    $_['TypeName'] = ucStrip($_['$ref']);
  }
  
  if ($_['properties']) {
    assert($_['type'] == 'object');
    $_['TypePrfx'] = $fn;
    $_['TypeName'] = ucStrip($name);
  }
  
  if ($_['additionalProperties']['$ref'] || $_['additionalProperties']['properties']) {
    $_['DataType'] = 'map';
    $_['TypeName'] = $_['additionalProperties']['$ref'];
  }
  if ($_['additionalProperties']['properties']) {
    $_['DataType'] = 'map';
    $_['TypePrfx'] = $fn;
    $_['TypeName'] = ucStrip($name) . "Element";
  }
  if ($_['additionalProperties']['items'] && $_['additionalProperties']['items']['type'] != 'any') {
    $_['DataType'] = 'map';
    $_['TypeName'] = $_['additionalProperties']['items']['$ref'];
  }


  if ($GLOBALS['TABOO'][$_['TypeName']] && $name != 'object') {
    $_['TypePrfx'] .= ucfirst($GLOBALS['doc']['name']); // TODO Use Canonical
  }
  
  if ($_['properties'] || ($_['type'] != 'array' && $_['$ref'])) {
    $_['ParamName'] = "Google_Service_$CapCan"."_$_[TypePrfx]$_[TypeName] ";
  }

  $_['IsComplex'] = is_property_complex($_);
}

echo '<?php';
?>

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_<?=$CapCan?>_<?=$fn?> extends Google_<?=$collection_key?"Collection\n":"Model\n"?>
{
<? if ($collection_key) : ?>
  protected $collection_key = '<?=$collection_key?>';
<? endif; ?>
<? if ($internal_gapi_mappings) : ?>
  protected $internal_gapi_mappings = array(
<? foreach ($internal_gapi_mappings as $k => $v): ?>
        "<?=$k?>" => "<?=$v?>",
<? endforeach; ?>
  );
<? endif; ?>
<? if ($node['properties']) : ?>
<? foreach ($node['properties'] as $prop): ?>
<? if ($prop['IsComplex']) : ?>
  protected $<?=$prop['Name']?>Type = 'Google_Service_<?=$CapCan?>_<?=$prop['TypePrfx'].$prop['TypeName']?>';
  protected $<?=$prop['Name']?>DataType = '<?=$prop['DataType']?>';
<? else : ?>
  public $<?=$prop['Name']?>;
<? endif; ?>
<? endforeach; ?>

<? foreach ($node['properties'] as $prop): ?>
<? if ($prop['IsComplex']) : ?>
  /**
   * @param Google_Service_<?=$CapCan?>_<?=$prop['TypePrfx'].$prop['TypeName']."\n" //TODO?>
   */
<? endif; ?>
  public function set<?=ucfirst($prop['GetSetName'])?>(<?=($prop['IsComplex'])?$prop['ParamName']:''?>$<?=$prop['Name']?>)
  {
    $this-><?=$prop['Name']?> = $<?=$prop['Name']?>;
  }
<? if ($prop['IsComplex']) : ?>
  /**
   * @return Google_Service_<?=$CapCan?>_<?=$prop['TypePrfx'].$prop['TypeName']."\n" //TODO?>
   */
<? endif; ?>
  public function get<?=ucfirst($prop['GetSetName'])?>()
  {
    return $this-><?=$prop['Name']?>;
  }
<? endforeach; ?>
<? endif; ?>
}
