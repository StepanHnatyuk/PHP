<?php
$arr=[];
for ($i=0; $i<=10; $i++){
    $arr[$i]=rand(1,100);
}
var_dump($arr);
$max=max($arr);
$min=min($arr);
echo "max=$max    min=$min";
for ($i=0; $i<count($arr); $i++){
    if ($arr[$i]==$max){
        $arr[$i]=$min;
    }
    elseif ($arr[$i]==$min){
        $arr[$i]=$max;
    }
}
var_dump($arr);