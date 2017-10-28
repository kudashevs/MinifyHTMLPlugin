<?php
$cid = $modx->resource->get('id');
$exclude = $modx->getOption('exclude',$scriptProperties,'12');

if(empty($cid)) { return; }
if(in_array($cid,explode(',',$exclude))) { return; }

$output = &$modx->resource->_output;
$pattern = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s');
$replace = array('>','<','\\1');
$output = preg_replace($pattern,$replace,$output);
