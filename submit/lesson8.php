<?php
$space=0;
$count=0;
$flash=5;
$minus=8;
while($count<7)
{
    echo "*";
    $count++;
}
while($flash>0)
{
    $space=0;
    echo"<br>";
    echo"*";
    while($space<$minus)
    {
        echo"&nbsp";
        $space++;
    }
    echo"*";
    $minus=$minus-2;
    $flash--;
}
// echo"<br>";
// echo"*";
// $space=0;
// while($space<6)
// {
//     echo"&nbsp";
//     $space++;
// }
// echo"*";
// echo"<br>";
// echo"*";
// $space=0;
// while($space<4)
// {
//     echo"&nbsp";
//     $space++;
// }
// echo"*";
// echo"<br>";
// echo"*";
// $space=0;
// while($space<2)
// {
//     echo"&nbsp";
//     $space++;
// }
// echo"*";

// echo"<br>";
// echo"*";
// $space=0;
// while($space<0)
// {
//     echo"&nbsp";
//     $space++;
// }
// echo"*";
echo"<br>";
echo"*";
?>