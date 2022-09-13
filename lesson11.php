<!-- 0, 1, 3, 6, 10, 15, 21, 28, 36, 45, 55 ... 1000 -->
<!-- 1,2,3,4,5,6,7 -->
<?php
$number=0;
$space=" ,  ";
$count=1;
echo $number;
for($number=0;$number<990;$count++)
{
    $number=$number+$count;
    echo $space . $number;
}
// $number=$number+2;
// echo $space . $number;
// $number=$number+3;
// echo $space.$number;
// $number=$number+4;
// echo $space.$number;
// $number=$number+5;
// echo $space.$number;
?>