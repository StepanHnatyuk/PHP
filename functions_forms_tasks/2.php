<?php
function findLongWords($text, $numb){
    $text=mb_strtolower($text);
    $text=preg_split("/[\\s_\\d.,!?:]+/",$text,0,PREG_SPLIT_NO_EMPTY);
    for ($i=0;$i<$numb;$i++){
        $maxLongWord="";
        foreach ($text as $key=>$word){

            if(mb_strlen($maxLongWord)<mb_strlen($word)){
                $maxLongWord=$word;
                $maxkey=$key;
                continue;
            }
            if ($maxLongWord===$word){
                unset($text[$key]);
            }

        }
        echo "$maxLongWord <br>";
        unset($text[$maxkey]);


    }

}

var_dump(findLongWords("три два8один чотири. лелека і лелека", 3)); /// звідки NULL появляється?