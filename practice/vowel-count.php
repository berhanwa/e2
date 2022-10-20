<?php
function vowelCount($word) 
{

    $count = 0;

    foreach (str_split($word) as $character) {
        if (in_array($character, ['a', 'e', 'i', 'o', 'u'])) {
            $count++;
        }
    }
    
    return $count;
}

var_dump(vowelCount('apple'));