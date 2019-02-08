<?php
$x= $_POST['number'];
$res = 0; //результат
  while ( $x > 0){
    $res += $x%10;
    $x /= 10;
  }
  echo $res;
?>
