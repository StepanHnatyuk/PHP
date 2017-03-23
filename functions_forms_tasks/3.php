<?php
$n=5;
$text="Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. 
Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.";

function cutText($text, $n){
    $cut=preg_split("/[\\s_\\d.,!?:-]+/",$text,0,PREG_SPLIT_NO_EMPTY);

       foreach ($cut as $word){
            if (mb_strlen($word)>=$n) {
                $text =str_replace($word, "", $text);
            }
        }
    echo $text;


    }


cutText($text,$n);