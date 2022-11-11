<?php

$jml = $_GET['jml'];
$tampungan = 0;
echo "<table border=1>\n";
for ($a = $jml; $a > 0; $a--)
{
  echo "<tr>\n";
  
  for ($b = $a; $b > 0; $b--)
  {
    $tampungan = + $b;
    if($b == 1){
      echo "$tampungan";
    }
    
  }
  echo "</tr>\n";


  echo "<tr>\n";
  for ($b = $a; $b > 0; $b--)
  {
    echo "<td>$b</td>";
  }
  echo "</tr>\n";
}
echo "</table>";

?>