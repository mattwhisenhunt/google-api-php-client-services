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

$output = [];
if ($all_resources) {
  foreach ($all_resources as $class_name => $keys) {
    $node = getResourceReference($keys);

    ksort($node['methods']);
    foreach ($node['methods'] as &$method) {
      if ($method['parameters']) {
        ksort($method['parameters']);
      }

      if ($method['parameterOrder']) {
        $parameters = [];
        foreach ($method['parameterOrder'] as $movedKey) {
          $parameters[$movedKey] = $method['parameters'][$movedKey];
          unset($method['parameters'][$movedKey]);
        }
        $method['parameters'] = array_merge($parameters, $method['parameters']);
      }
    }
    $output[$class_name] = [render_resource_name($keys), &$keys[count($keys)-1], &$node['methods']];
  }
  unset($method);
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

/**
 * Service definition for <?=$CapCan?> (<?=$doc['version']?>).
 *
 * <p>
 * <?=wordwrap(trim($doc['description']), 77, "\n * ")?></p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="<?=$doc['documentationLink']?>" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_<?=$CapCan?> extends Google_Service
{
<? if ($real_scopes): ?>
<? foreach ($real_scopes as $key => $value): ?>
  /** <?=$value[1]?>. */
  const <?=$key?> =
      "<?=$value[0]?>";
<? endforeach; ?>
<? else: ?>

<? endif; ?>

<? if ($all_resources)
   foreach ($all_resources as $key => $value): ?>
  public $<?=lcfirst($key)?>;
<? endforeach; ?>
<? if ($doc['methods']): ?>
  private $base_methods;
<? else: ?>
  
<? endif; ?>
  /**
   * Constructs the internal representation of the <?=wordwrap("$CapCan service", 28, "\n   * ")?>.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = '<?=$doc['rootUrl']?>';
    $this->servicePath = '<?=$doc['servicePath']?>';
    $this->version = '<?=$doc['version']?>';
    $this->serviceName = '<?=$doc['name']?>';

<? foreach ($output as $member_name => list($class_name, $literal_name, $methods)): // resource ?>
    $this-><?=lcfirst($member_name)?> = new Google_Service_<?=$CapCan?>_Resource_<?=$class_name?>(
        $this,
        $this->serviceName,
        '<?=$literal_name?>',
        array(
          'methods' => array(
            <? foreach ($methods as $method_name => $method): // resource,method ?>
'<?=$method_name?>' => array(
              'path' => '<?=$method['path']?>',
              'httpMethod' => '<?=$method['httpMethod']?>',
<? if ($method['parameters']): ?>
              'parameters' => array(<?foreach ($method['parameters'] as $pname => $pval): // resource,method,parameter?>

                '<?=$pname?>' => array(
                  'location' => '<?=$pval['location']?>',
                  'type' => '<?=$pval['type']?>',
<? if ($pval['repeated']):?>
                  'repeated' => true,
<? endif;?>
<? if ($pval['required']):?>
                  'required' => true,
<? endif;?>
                ),<? endforeach; // resource,method,parameter ?>

              ),
<? else: ?>
              'parameters' => array(),
<? endif; ?>
            ),<? endforeach; // resource,method ?>

          )
        )
    );
<? endforeach; // resource ?>
<? if ($doc['methods']): ?>
    $this->base_methods = new Google_Service_Resource(
        $this,
        $this->serviceName,
        '',
        array(
          'methods' => array(
            <? foreach ($doc['methods'] as $method_name => $method): // resource,method ?>
'<?=$method_name?>' => array(
              'path' => '<?=$method['path']?>',
              'httpMethod' => '<?=$method['httpMethod']?>',
<? if ($method['parameters']): ?>
              'parameters' => array(<?foreach ($method['parameters'] as $pname => $pval): // resource,method,parameter?>

                '<?=$pname?>' => array(
                  'location' => '<?=$pval['location']?>',
                  'type' => '<?=$pval['type']?>',
<? if ($pval['repeated']):?>
                  'repeated' => true,
<? endif;?>
<? if ($pval['required']):?>
                  'required' => true,
<? endif;?>
                ),<? endforeach; // resource,method,parameter ?>

              ),
<? else: ?>
              'parameters' => array(),
<? endif; ?>
            ),<? endforeach; // resource,method ?>

          )
        )
    );
<? endif; ?>
  }
<? if ($doc['methods'])
   foreach ($doc['methods'] as $method_name => $method): ?>
  /**
   * (<?=$method['id']?>)
   *
   * @param array $optParams Optional parameters.
<? if ($method['parameters']): ?>
   *
<? foreach ($method['parameters'] as $param_name => $param): ?>
   * @opt_param string <?=$param_name?>

<? endforeach; ?>
<? endif; ?>
   * @return Google_Service_<?=$CapCan?>_<?=$method['response']['$ref']?>

   */
  public function <?=$method_name?>($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('<?=$method_name?>', array($params), "Google_Service_<?=$CapCan?>_<?=$method['response']['$ref']?>");
  }
<? endforeach; ?>
}
