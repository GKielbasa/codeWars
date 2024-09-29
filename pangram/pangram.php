<?php
function detect_pangram($string)
{
    $alphabet = range('a', 'z');
    $string = strtolower(preg_replace('/\s+/u', '', $string));

    foreach ($alphabet as $char) {
        if (strpos($string, $char) === false) {
            return false;
        }
    }
    
    return true;
}

var_dump(detect_pangram("The quick brown1.#$ fox jumps over the lazy dog"));