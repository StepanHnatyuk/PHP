<?php
function reverseSentence($text){
    $text = preg_split("/(?<=[.!?])+/ui", $text, 0, PREG_SPLIT_NO_EMPTY); //розбиваєм по реченнях

    $text=array_reverse($text);

    $text=implode($text);

echo $text;

}


reverseSentence("Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь.
А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.");