<?php
echo "Form submitted succefully";
var_dump($_POST);
extract($_POST);
$count_colums=0;
$count_rows=0;
echo "
<table border='2'>
  ";
  while($count_rows<$rows)
  {
    echo"<tr>
        ";
        while($count_colums<$colum)
        {
          echo"<td>
            hiee
          </td>
          ";
          $count_colums++;
        }
      echo"
      </tr>";
      $count_rows++;
  }
 echo "
</table>";
?>