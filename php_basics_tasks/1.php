<?php
/**
 * Created by PhpStorm.
 * User: Stepan
 * Date: 02.03.2017
 * Time: 22:55
 */
$name="Stepan";
$age= "8njn"; // Якщо строка поч з цифри, то працює невірно
echo "Меня зовут $name \n";
echo "Мне $age лет\n";
if ($age>=18 && $age<=59) {
    echo "Вам еще работать и работать\n";
}
if ($age>59) {
    echo "Вам пора на пенсию\n";
}
if ($age<18 && $age>0){
    echo "Вам еще рано работать\n";
}
if ($age<0 || is_int($age)==false){
    echo "Неизвестный возраст\n";
}
