<!-- write a programe to sort an array -->
<?php
$number=array();

$num=rand(10,99);
echo $num;
$count=0;
while($count<=7)
{
    $number[$count]=rand(10,99);
    $count++;
}
var_dump($number);
$flash=0;
while($flash<=7)
{
    $count=$flash+1;
    while($count<=7)
    {
        if($number[$flash]<$number[$count])
        {
            $temp=$number[$flash];
            $number[$flash]=$number[$count];
            $number[$count]=$temp;
        }
        $count++;
    }
    $flash++;
}
var_dump($number);
?>