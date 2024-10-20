<?php
function toJadenCase(string $string): string
{
    $string = explode(' ',$string); 
    foreach ($string as &$word) {
        $word = ucfirst($word);
    }
    return implode(' ', $string);
}

var_dump(toJadenCase('hello to you dear human'));