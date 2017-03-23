<?php
function calculateWord($text){
    $text=preg_split("/\\s/ui",$text,0,PREG_SPLIT_NO_EMPTY);
    $sort=array_count_values($text);
    arsort($sort);
    foreach ($sort as $key=> $value){
        echo"$key - $value<p>";
    }

}

$text="яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня
 черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня 
 черешня груша яблоко черешня вишня";

calculateWord($text);