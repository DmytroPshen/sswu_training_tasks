<?php

//  Task 3:
// Створіть функцію обертання вліво та вправо, яка
// повертає всі обертання рядка вліво та вправо.
//  Приклад:
// leftRotations("abc") ➞ ["abc", "bca", "cab"]
// rightRotations("abc") ➞ ["abc", "cab", "bca"]

    function leftRotations($string){
        $row = $string;
        $final1[0] = $row;
        for($str = strlen($row); $str > 1; $str--){
            $array = str_split($row, 1);
            $first = array_shift($array);
            $array[] = $first;
            $im = implode($array);
            $row = $im;
            $final1[] = $im;
        }
        print_r($final1);
    }
    function rightRotations($string){
        $row1 = $string;
        $final2[0] = $row1;
        for($str = strlen($row1); $str > 1; $str--)
        {
            $array1 = str_split($row1, 1);
            $last = array_pop($array1);
            array_unshift($array1, $last);
            $im1 = implode($array1);
            $row1 = $im1;
            $final2[] = $im1;
        }
        print_r($final2);
    }

    leftRotations("abc");
    rightRotations("abc");
