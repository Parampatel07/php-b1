<?php
$number=array(1045,2450,31000,40,10,"param","ravi","om");
var_dump($number);

sort($number,SORT_REGULAR);
var_dump($number);

sort($number,SORT_NUMERIC);
var_dump($number);

sort($number,SORT_STRING);
var_dump($number);
?>