<?php
/**
 * Created by PhpStorm.
 * User: Stepan
 * Date: 02.03.2017
 * Time: 22:57
 */
$s=30; //длина участка, который проехал автомобиль в км
$t=2; // время движения в часах
$v=$s/$t; //скорость автомобиля в км/ч
$vm=round($s/$t*1000/3600,2); //скорость автомобиля в м/сек
echo "Скорость автомобиля на заданном участке $v км/час или $vm м/сек\n";