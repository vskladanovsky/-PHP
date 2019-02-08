<?php
$year = $_POST['year'];
        switch($year%12){
            case 4:
             echo $year." год Крысы";
             break;
            case 5:
                echo $year." год ";
                break:
            case 6:
                echo $year." год ";
                break;
            case 7:
                echo $year." год ";
                break;
            case 8:
                echo $year." год ";
                break:
            case 9:
                echo $year." год ";
                break;
            case 10:
                echo $year." год ";
                break;
            case 11:
                echo $year." год ";
                break:
            case 0:
                echo $year." год ";
                break;
            case 1:
                echo $year." год Петуха";
                break;
            case 2:
                echo $year." год Собаки";
                break:
            case 3:
                echo $year." год Свиньи";
                break;
            default:
                echo "Ошибка ввода";
                break;
        }
?>
