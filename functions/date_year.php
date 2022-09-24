<?php
// date("L");
if(date("L")==0)
{
    echo "this is not leap year";
}
else
{
    echo "it is a leap year";
}
echo "<br/>";
echo "year in 4 digit ".date("Y");
echo "<br/>";
echo "year in 2 digit ".date("y");
?>