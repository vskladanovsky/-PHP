<?php
function array_swap($array, $key, $key2)
{
    $buf = $array[$key];
    $array[$key] = $array[$key2];
    $array[$key2] = $buf;

    return $array;
}
function arr_out($arr){
  $count = 0;
  while ($count < 10){
    if ($count == 0)
      $out .= "[ ".$arr[$count].", ";
    else if($count == 9)
      $out .= $arr[$count]." ]<br>";
    else
      $out .= $arr[$count].", ";
    $count++;
  }
  return $out;
}
$count = 0;
$out = "Первоначальный массив: ";
  while ($count < 10){
    $arr[] = rand(1,100);
    $count++;
  }
  $out .= arr_out($arr);
  $out .= "MIN: ".$arr[array_search(min($arr), $arr)]."<br>MAX: ".$arr[array_search(max($arr), $arr)]."<br>Результат: ";
  $arr = $arr = array_swap ($arr,array_search(min($arr), $arr),array_search(max($arr), $arr));
  $out .= arr_out($arr);
  echo $out;
?>
