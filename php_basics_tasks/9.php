<?php
/**
 * Created by PhpStorm.
 * User: Stepan
 * Date: 02.03.2017
 * Time: 22:56
 */
$day=3;
switch ($day){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5: echo "Это рабочий день\n";
        break;
    case 6:
    case 7: echo "Это выходной день\n";
        break;
    default: echo "Неизвестный день\n";
}
