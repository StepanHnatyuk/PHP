<?php

if (!empty($_POST)){
//    var_dump($_POST);
    $data=parseData($_POST);
    saveData($data);
    returnWord();   //БЕЗ ЦІЄЇ ФУНКЦІЇ ОСТАННІЙ КОМЕНТ ДУБЛЮЄТЬСЯ В comment.txt при обновленні сторінки
                    //Я тупо його видаляю цією функцією в текстовому файлі.
}


function parseData($request){
    $data=[
        'name'=>!empty($request['username'])? $request['username']:exit,
        'text'=>!empty($request['comment'])? $request['comment']:exit
    ];
    return $data;
//    var_dump($data);
}

function saveData($data){
    if (!empty($_POST)) {
        $item = fopen('comment.txt', 'a');
        fwrite($item, "$data[name]:$data[text]|");
        fclose($item);
    }
}
function returnWord(){
    $content = file_get_contents(__DIR__.'/comment.txt');
    $comments = explode('|', $content);
    $k=count($comments);
    if ($comments[$k-2]===$comments[$k-3]){//удаляємо дублюючі комменти і ті що при перезпгрузці сторінки зявляються
        unset($comments[$k-2]);
    }
    $word=implode("|", $comments);
     $item = fopen('comment.txt', 'w');
    fwrite($item, "$word");
    fclose($item);

}

