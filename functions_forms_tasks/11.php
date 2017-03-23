<?php

function correctSentence($text){

    $text = preg_split("/(?<=[.!?])+/ui", $text, 0, PREG_SPLIT_NO_EMPTY); //розбиваєм по реченнях
    for ($j=0; $j<count($text); $j++) {

        $b = preg_split("//ui", $text[$j], 0, PREG_SPLIT_NO_EMPTY); // розбиваєм по буквах

        for($i=0; $i<count($b); $i++) {
            if ($b[$i]!== " ") {                       //першу букву міняєм на велику і виходимо з циклу
                $b[$i] = mb_strtoupper($b[$i]);
                break;
            }

        }

        $b = implode($b);// ліпимо з букв речення
        $text[$j]=$b;

    }
    $text = implode($text); // ліпимо з речень текст
    echo $text;
}

correctSentence("а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а 
        король-то — голый. а ларчик просто открывался.а там хоть трава не расти.");