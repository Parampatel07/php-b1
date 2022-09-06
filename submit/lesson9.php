<?php
$count=0;
$flash=0;
$temp=0;
$minus=5;
$new=1;
// echo "*";
while($temp<5)
{
    while($count<=$minus)
    {
        echo "&nbsp&nbsp";
        $count++;
    }
    $flash=0;
    while($flash<=$temp)
    {
        if($flash==0)
        {
            echo $new;
        }
        else if($flash==1)
        {
            echo $new+1;
        }
        else if($flash==2)
        {
            if($temp==2)
            {
                echo $new;
            }
            else if($temp==4)
            {
                echo $new+2;
            }
        }
        else if($flash==3)
        {
            echo $new+1;
        }
        else if($flash==4)
        {
            echo $new;
        }
        // echo $new;
        $flash++;
    }
    echo "<br>";
    $count=0;
    $temp=$temp+2;
    $minus--;
    $new++;
}
