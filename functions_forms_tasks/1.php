<?php
error_reporting(-1);
$a="Hi! My name is Jon Connor.";
$b="Hi! My name is Sara";

function getCommonWords($a, $b){
    $a=mb_strtolower($a);
    $a=preg_split("/[\\s_\\d.,!?:]+/",$a,0,PREG_SPLIT_NO_EMPTY);
    $b=mb_strtolower($b);
    $b=preg_split("/[\\s_\\d.,!?:]+/",$b,0,PREG_SPLIT_NO_EMPTY);
    return array_intersect($a,$b);
}

var_dump( getCommonWords($a,$b));