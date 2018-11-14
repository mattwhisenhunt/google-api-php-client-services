<?php
/*
 * Copyright {$CopyrightYear} Google LLC
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

class Google_Service_{$Service->getCanonicalName()}_{$ClassName} extends {**}
Google_{if $CollectionKey}Collection{else}Model{/if}

{
{if $Service->hasDataWrapper()}
  const DATA_WRAP = true;

{/if}
{if $CollectionKey}
  protected $collection_key = '{$CollectionKey}';
{/if}
{if $InternalGapiMappings}
  protected $internal_gapi_mappings = array(
{foreach $InternalGapiMappings as $k => $v}
        "{$k}" => "{$v}",
{/foreach}
  );
{/if}
{foreach $Properties as $prop}
{if $prop->isComplex()}
  protected ${$prop->getName()}Type = '{$prop->getParamName()}';
  protected ${$prop->getName()}DataType = '{$prop->getDataType()}';
{else}
  public ${$prop->getName()};
{/if}
{/foreach}

{foreach $Properties as $prop}
{if $prop->isComplex()}
  /**
   * @param {$prop->getParamName()}
   */
{/if}
  public function set{$prop->getGetSetName()|ucfirst}({$prop->getFuncParam()})
  {
    $this->{$prop->getName()} = ${$prop->getName()};
  }
{if $prop->isComplex()}
  /**
   * @return {$prop->getParamName()}
   */
{/if}
  public function get{$prop->getGetSetName()|ucfirst}()
  {
    return $this->{$prop->getName()};
  }
{/foreach}
}
