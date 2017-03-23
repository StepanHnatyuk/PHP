<?php
function uniqueWord($text,$words){
    $a=[];
    $text=mb_strtolower($text);
    $text=preg_split("/[\\s_\\d.,!?:]+/",$text,0,PREG_SPLIT_NO_EMPTY);
    $words=mb_strtolower($words);
    $words=explode(" ", $words);

    foreach ($words as $word){
        $a[$word]=0;
        for ($i=0; $i< count($text); $i++){
            if ($word===$text[$i]){
                $a[$word]=$a[$word]+1;
            }
        }
        echo "Слово \"{$word}\", співпадінь в тексті:$a[$word]<p></p>";
    }


}


$text="А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. 
        А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.";

$words="А там расти";

uniqueWord($text,$words);