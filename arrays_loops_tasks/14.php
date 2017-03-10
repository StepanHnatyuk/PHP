<?php
$arr=[4, 2, 5, 19, 13, 0, 10];
$k=0;
foreach ($arr as $v){
    if ($v==2||$v==3||$v==4){
        $k++;
    }
}
if ($k>0) echo "ЕСТЬ";
else {echo "НЕТ!";}