<?php
/**
 * <p>15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная
  $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0,
 если надо - выдавать ошибку что на 0 делить нельзя.
</p>
 */
$a=25;// Введіть перше число
$operator="%"; // Введіть оператор
$b=12;//Введіть друге число

if ($operator=="/" && $b===0){
    echo "Операція неможлива. Ділення на 0";
}
else {
    switch ($operator){
        case "+": echo $a+$b; break;
        case "-": echo $a-$b; break;
        case "*": echo $a*$b; break;
        case "/": echo $a/$b; break;
        case "%": echo $a%$b; break;
    }
}