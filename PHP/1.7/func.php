<?php
$year = $_POST['year'];
if ($year%400 == 0)
  echo "Год ".$year." високосный";
else if ($year%100 == 0)
  echo "Год ".$year." не високосный";
else if ($year%4 == 0)
  echo "Год ".$year." високосный";
else
  echo "Год ".$year." не високосный";
?>
