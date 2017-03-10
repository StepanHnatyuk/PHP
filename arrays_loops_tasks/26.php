<?php
$arr=[];
for ($i=0; $i<=10; $i++){
    $arr[$i]=rand(-100,100);
}
var_dump($arr);
$div=1;
foreach ($arr as $key=>$val) {
    if ($key % 2 == 0 && $val > 0) {
        $div *= $val;
    } elseif ($key % 2 != 0 && $val > 0) {
        echo "$val\n";
    }
}
if ($div==1){
    echo "Елементів більших нуля і з парними індексами немає, або вони рівні одиниці";
}
elseif ($div!=1){
    echo "Множення рівне $div ";
}