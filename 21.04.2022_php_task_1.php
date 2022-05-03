<?php

    // PHP. Розминка з минулої теми
    // Створіть функцію, яка приймає рядок
    // повертає кількість голосних, які в ній є
    //  countVowels("Celebration") ➞ 5
    //  countVowels("Palm") ➞ 1

    function countVowels($string){
        $st = strtolower($string);
        $letters = str_split($st, 1);
        $i = 0;
        $vowels = ['e', 'y', 'u', 'i', 'o', 'a'];
        foreach ($letters as $letter){
            foreach ($vowels as $vowel){
                if($letter == $vowel){
                    $i++;
                }
            }
        }
        echo $i;
    }

    countVowels('Celebration');
