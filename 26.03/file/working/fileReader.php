<?php
$folder='';
if (isset($_GET['papka'])){
    $folder=trim(strip_tags($_GET['papka']));
}

//function scan($dir){
//    if ($objs = glob($dir."/*")) {
//        foreach($objs as $obj) {
//            if ( is_dir($obj) ){
//                scan($obj);
//            } else {
//                echo "<a href='$obj'>$obj<br></a>";
//            }
//        }
//    }
//}

$path=__DIR__.DIRECTORY_SEPARATOR.'.'.DIRECTORY_SEPARATOR.$folder;
//scan($path);


$files=scandir($path);
foreach ($files as $file){
    if (is_dir($path.DIRECTORY_SEPARATOR.$file)){
        echo "<p>{$file}
                <a href='./fileReader.php?papka={$file}'>[folder]</a>
           </p>";
    }
    else {
        echo "<p>{$file}<a href='./fileForm.php?file={$file}'>[file]</a></p>";
    }
}
?>
