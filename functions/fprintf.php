<?php
$filename =fopen("test.txt","a");

fprintf($filename,"param patel , ravi dave ");
echo "content written succssfully";
fclose($filename);
?>