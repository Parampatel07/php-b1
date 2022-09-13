<!-- // 2, 1, 3, 4, 7, 11, 18, 29, 47, 76, 123 .... 700 -->
<?php
$first=2;
$second=1;
$answer=0;
$count=0;
$space=", ";
echo $first.$space;
echo $second.$space;
$answer=$first+$second;
for($count=0;$answer<700;$count++)
{
    $first=$answer;
    echo $answer.$space;
    $answer=$answer+$second;
    $second=$answer;
    echo $answer.$space;
    $answer=$answer+$first;
}
// $first=$answer;
// echo $answer.$space;
// $answer=$answer+$second;
// $second=$answer;
// echo $answer.$space;
// $answer=$answer+$first;
// echo $answer.$space;
// $answer=$answer+$second;
// echo $answer.$space;    
?>