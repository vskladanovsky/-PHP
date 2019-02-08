<?php
$x = 5;
$arr = range (20,45);
$res = 0;
foreach ($arr as $el){
  if (fmod($el,$x) == 0)
      $res += $el;
}
echo "Число сумма числел которые делятся на 5 в промежутке от 20 до 45 составляет: <br>".$res;
?>
