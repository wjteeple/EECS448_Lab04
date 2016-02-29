<?php
  function multiply($x, $y) {
      $z = $x * $y;
      return $z;
  }

  echo "<table>";
  echo "<tr>      ";
  for ($j = 1; $j < 101; $j++)
  {
    echo "<tr>";
    for ($k = 1; $k < 101; $k++)
    {
      echo "<td>" . multiply($j, $k) . "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
?>
