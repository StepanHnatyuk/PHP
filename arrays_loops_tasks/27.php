<?php

$rows =6; // количество строк
$cols =6; // количество столбцов
$colors =['red','yellow','blue','gray','maroon','brown','green'];

echo "<table border='1' cellpadding='0' cellspacing='0'> ";
for ($i=1; $i<=$rows; $i++){
    echo "<tr>";
    for ($k=1; $k<=$cols; $k++){
        $color=$colors[array_rand($colors)];
        $number=rand(1,99999);
        echo "<td bgcolor=$color>$number</td>";
    }
    echo "</tr>";
}
echo "</table>";