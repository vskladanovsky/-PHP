<?php
$x = $_POST['x'];
$num = $_POST['y'];
echo "Цифра ".$x." встречается в числе ".$num." -- ".substr_count($num, $x)." раз/a.";
?>
