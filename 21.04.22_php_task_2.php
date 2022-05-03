<?php
    // Створіть функцію, яка видаляє літери «a», «b»
    // та «c» з цього рядка і поверне змінену версію.
    // Якщо цей рядок не містить "a", "b" або "c",
    // повернути null.
    //  removeABC("This might be a bit hard") ➞ "This
    // might e it hrd"
    //  removeABC("hello world!") ➞ null

    function removeABC($str){
        $letters = ["a", "b", "c"];
        $strings =  str_split($str, 1);
        $i = 0;
        $iter = 0;
        foreach ($strings as $string){
            foreach ($letters as $letter){
                if($string == $letter){
                    unset($strings[$iter]);
                    $i++;
                }
            }
            $iter++;
        }
        $fin_res = implode($strings);
        if($i != 0){
            echo $fin_res;
        }
        else{
            echo "null";
        }
    }

    removeABC("This might be a bit hard");
