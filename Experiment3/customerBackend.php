<?php
  $item1 = $_POST["bat"];
  $item2 = $_POST["mitt"];
  $item3 = $_POST["ball"];
  $percost1 = 79.99;
  $percost2 = 59.99;
  $percost3 = 124.99;
  $tcost1 = $item1 * $percost1;
  $tcost2 = $item2 * $percost2;
  $tcost3 = $item3 * $percost3;
  $ship = $_POST["shipping"];
  $shipCost = 0;
  $totalCost = $tcost1 + $tcost2 + $tcost3 + $shipCost;
  $user = $_POST["user"];
  $pass = $_POST["pass"];

  if ($ship == "1 day") {
    $shipCost = 19.99;
  }
  else if ($ship == "3-5 day") {
    $shipCost = 14.99;
  }
  else {
    $shipCost = 0;
  }

  echo "<table border = '1'>";

  echo "<tr><td>Item</td><td>Qty</td><td>Unit Cost</td><td>Total Cost</td></tr>";
  echo "<tr><td>Baseball Bats</td><td>" . $item1 . "</td><td>$" . $percost1 . "</td><td>$" . $tcost1 . "</td></tr>";
  echo "<tr><td>Baseball Mitts</td><td>" . $item2 . "</td><td>$" . $percost2 . "</td><td>$" . $tcost2 . "</td></tr>";
  echo "<tr><td>Baseballs</td><td>" . $item3 . "</td><td>$" . $percost3 . "</td><td>$" . $tcost3 . "</td></tr>";
  echo "<tr><td>Shipping</td><td>" . "</td><td>" . $ship . "</td><td>$" . $shipCost . "</td></tr>";
  echo "<tr><td>Total cost</td><td></td><td></td><td>$" . $totalCost . "</td></tr></table><br>";

  echo "Remember your username and password!<br><br>";
  echo "username : " . $user . "<br>";
  echo "password : " . $pass . "<br>";
 ?>
