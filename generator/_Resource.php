<?php

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

/**
 * The "<?=$leaf?>" collection of methods.
 * Typical usage is:
 *  <code>
 *   $<?=$GLOBALS['doc']['name']?>Service = new Google_Service_<?=$CapCan?>(...);
 *   $<?=$leaf?> = $<?=$GLOBALS['doc']['name']?>Service-><?=$leaf?>;
 *  </code>
 */
class Google_Service_<?=$CapCan?>_Resource_<?=$class_name?> extends Google_Service_Resource
{
<? foreach ($methods as $_): ?>
  /**
   * <?=wordwrap(" ($leaf.". $_['Name'] . ($_['Taboo']?$class_name:"").")", 77, "\n   * ")?>

   *
<? if ($method['parameterOrder'])
   foreach ($method['parameterOrder'] as $key): ?>
   * <?=$_['parameters'][$key]['type']?> <?=$key?>
<? endforeach; ?>
<? if ($method['parameters'])
   foreach ($_['parameters'] as $k => $param): ?>
<? if ($param['required']): ?>
   * <?=print_parameter($k, $param)?>
<? endif; ?>
<? endforeach; ?>
<? if ($_['request'] && $_['httpMethod'] != 'GET') : ?>
   * @param Google_Service_<?=$CapCan?>_<?=$GLOBALS['schemas'][$_['request']['$ref']]['ClassName']?> $postBody
<? endif; ?>
   * @param array $optParams Optional parameters.
<? if ($_['Optional']) : ?>
   *
<? if ($method['parameters'])
   foreach ($_['parameters'] as $k => $param): ?>
<? if (!$param['required']): ?>
   * <?=print_parameter($k, $param)?>
<? endif; ?>
<? endforeach; ?>
<? endif; ?>
<? if ($_['response']) : ?>
   * @return Google_Service_<?=$CapCan?>_<?=$GLOBALS['schemas'][$_['response']['$ref']]['ClassName']?>
<? endif; ?>

   */
  public function <?=$_['Name']?><?=$_['Taboo']?$class_name:""?>(<?=$_['PList']?>
<? if ($_['request'] && $_['httpMethod'] != 'GET'){?><?=$_['PList']?', ':''?>Google_Service_<?=$CapCan?>_<?=$GLOBALS['schemas'][$_['request']['$ref']]['ClassName']?> $postBody<?}?>
<?=$_['PList']||($_['request'] && $_['httpMethod'] != 'GET')?', ':''?>$optParams = array())
  {
    $params = array(<?=$_['PArry']?><? if ($_['request'] && $_['httpMethod'] != 'GET'){?><?=$_['PArry']?' ,':''?>'postBody' => $postBody<?}?>);
    $params = array_merge($params, $optParams);
    return $this->call('<?=$_['Name']?>', array($params)<? if ($_['response']){?>, "Google_Service_<?=$CapCan?>_<?=$GLOBALS['schemas'][$_['response']['$ref']]['ClassName']?>"<?}?>);
  }
<? endforeach; ?>
}
