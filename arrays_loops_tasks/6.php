<?php
$arr=['geen'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
$ru=[];
$en=[];
foreach ($arr as $k=>$val){
    array_push($en, $k);
    array_push($ru, $val);
}
var_dump($en);
var_dump($ru);