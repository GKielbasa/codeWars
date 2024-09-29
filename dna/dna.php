<?php
function DNA_strand($dna)
{
    $replacements = [
        'A' => 'T',
        'T' => 'A',
        'C' => 'G',
        'G' => 'C',
    ];
    $str = str_split($dna, 1);

    foreach($str as &$char) {
        if(in_array($char, $replacements)) {
            $char = array_keys($replacements, $char)[0];
        }
    }
    
    return implode('', $str);
}

$str = 'ATTGC';

DNA_strand($str);