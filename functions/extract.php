<?php
$person=array();
$person['name']="param";
$person['surname']="patel";
$person['weight']=45.45;
$person['age']=18;
var_dump($person);

extract($person);

echo $name;
echo "<br>";
echo $surname;
echo "<br>";
echo $weight;
echo "<br>";
echo $age;
echo "<br>";

?>