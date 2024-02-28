<?php
    //Задача 1
    echo "Парні числа від 1 до 100:".PHP_EOL;
    for ($i = 1; $i < 100; $i++) {
        if($i % 2 ==0){
            echo $i.PHP_EOL;
        }
    }
    //Задача 2
    echo "Парні числа з масиву [1, 23, 44, 88, 13, 11, 7 , 8]:".PHP_EOL;
    $array = [1, 23, 44, 88, 13, 11, 7 , 8];
    foreach ($array as $number){
        if($number % 2 == 0){
            echo $number.PHP_EOL;
        }
    }