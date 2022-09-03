<?php
$count=1;
$flash=1;
$count_minus=9;
$flash_count=1;
$print=1;
$count_main=0;
for($temp=1;$temp<6;$temp++)
{
    $count=1;
    while($count<=$count_minus)
    {
        echo "&nbsp&nbsp";
        $count++;
    }
    $flash=1;
    while($flash<=$flash_count)
    {
        // if()
        echo $print;
        $print++;
        // $print--;
        echo "&nbsp&nbsp";
        $flash++;
    }
    echo "<br>";
    $count_minus=$count_minus-2;
    $flash_count=$flash_count+2;
    // $print++;
    $count_main++;
    // echo "the value of count main is".$coutn_
}
?>