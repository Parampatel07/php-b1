<?php
echo "Form submitted succefully";
var_dump($_POST);
extract($_POST);
$count_colums=0;
$count_rows=0;
// $colum=2;
echo "
<table border='2'>
  ";
  while($count_rows<$rows)
  {
    echo"<tr border=2 style='height:10px;'>";
        while($count_colums<$colum)
        {
          echo"<td>
             hiee
           </td>
           ";
          $count_colums++;
        }
        $count_colums=0;
      echo"
    </tr>";
    $count_rows++;
  }
 echo "
</table>";
?>