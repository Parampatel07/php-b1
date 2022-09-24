<?php
$number1=array(10,20,30,40,50);
$number2=array(50,60,70,80,90);
$student=array("ravi","dave","22","45.45");
$person=array();
$person['name']="param";
$person['surname']="patel";
$person['weight']=45.45;
$person['age']=18;
var_dump($student);

list($name,$surname,$age,$weight)=$student;

echo "my name is ".$name." surname is ".$surname." age is ".$age." weight is".$weight;

$temp=array_merge($number1,$number2);
var_dump($temp);
$temp=array_merge($temp,$student);
var_dump($temp);
$temp=array_merge($temp,$person);
var_dump($temp);
?>