<?php
for ($i=1; $i<=10; $i++){
    for ($k=1; $k<=10; $k++){
        $s=$k*$i;
        if ($s<10){
            echo "$s |";
        }
        else {echo "$s|";}
    }
    echo "/n";
}
?>