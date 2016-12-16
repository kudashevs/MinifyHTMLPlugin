<?php
$output = &$modx->resource->_output;
$pattern = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s');
$replace = array('>','<','\\1');
$output = preg_replace($pattern,$replace, $output);