<?php
function reverse_string($text){
    for($i=0;$i<floor(mb_strlen($text)/2);$i++){
        $a=$text[$i];
        $text[$i]=$text[mb_strlen($text)-1-$i];
        $text[mb_strlen($text)-1-$i]=$a;
    }
    echo $text;
}

reverse_string("abcdef");