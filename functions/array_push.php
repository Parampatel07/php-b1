<?php
$number2=array(50,60,70,80,90);
var_dump($number2);
array_push($number2,100);
array_push($number2,40);
sort($number2,SORT_NUMERIC);
var_dump($number2);
$temp=array_pop($number2);
echo $temp;
var_dump($number2);
$temp=array_reverse($number2);
var_dump($temp);
?>