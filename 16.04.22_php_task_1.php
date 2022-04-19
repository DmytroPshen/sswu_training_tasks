<?php

// Php task 1.
// Напишіть функцію, яка приймає рядок і
// число. Поверніть у вигляді масиву тільки ті
// слова, довжина яких перевищує число.

    function Task1($row, $num){
        $array = explode(" ", $row);
        foreach ($array as $arr){
            if(strlen($arr) > $num){
                $ret_arr[] = $arr;
            }
        }
        return $ret_arr;
        // return $array;
    }

    $r = "q we rty uiop asdfg";
    $n = 4;
    $result = Task1($r,$n);
    var_dump($result);
