<?php
$name = $_POST["name"];
$surname = $_POST["surname"];
$secname = $_POST["secname"];
echo $surname.' '.substr($name, 0, 2).'. '.substr($secname, 0, 2).'.';
print_r ($parts);
?>
