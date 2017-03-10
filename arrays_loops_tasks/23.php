<?php
$str="123";
$arr=str_split($str);
$sum=0;
foreach ($arr as $val){
    $sum=$sum+$val;
}
var_dump ($arr);
echo $sum;