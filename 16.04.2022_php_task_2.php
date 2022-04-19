<?php

// Php_task 2
// Напишіть функцію, яка приймає будь-яке
// невід'ємне число, а повертає максимально
// можливе значення з цифр цього числа.
// Приклад:
// function(123456789) => 987654321
// function(42145) => 54421

    function Task2($num){
        $array = str_split($num, 1);
        rsort($array);
        $str = implode($array);
        echo "$str";
    }

    Task2(42145);
