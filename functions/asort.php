<?php
$person=array();
$person['name']="param";
$person['surname']="patel";
$person['weight']=45.45;
$person['age']=18;
var_dump($person);


asort($person,SORT_REGULAR);
var_dump($person);

asort($person,SORT_NUMERIC);
var_dump($person);

asort($person,SORT_STRING);
var_dump($person);

$count=count($person);
echo $count;
echo "<br>";
echo sizeof($person);
?>