<?php
$str="442158755745";
$let="7";

$arr=str_split($str);
$sum=0;
foreach ($arr as $val){
    if ($val==$let){
        $sum++;
    }
}
echo $sum;