<?php
$minute= $_POST['min'];
$last = $minute%10;
if ($last == 0 || $last == 4 || $last == 5 || $last == 9)
  echo "В минуту ".$minute." светофор горит красным.";
else
 echo "В минуту ".$minute." светофор горит зеленым.";
?>
