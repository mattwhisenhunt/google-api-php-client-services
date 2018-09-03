<?php
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
