<?php
$name=array();
$name['name']="param";
$name['sURname']="patel";
$name['AGE']=18;
var_dump($name);

var_dump(array_change_key_case($name,CASE_UPPER));
var_dump(array_change_key_case($name,CASE_LOWER));

echo array_key_exists('name',$name);
// echo "<br> this is weight";
echo array_key_exists('wieght',$name);

array_unshift($name,'45.45');
var_dump($name);
?>