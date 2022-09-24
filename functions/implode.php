<?php
$name=array('ravi','param','jeet','dhaivat');
var_dump($name);
$string=implode(",",$name);
echo "students are ".$string.".";

$new_array=explode(",",$string);
var_dump($new_array);
?>