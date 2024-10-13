<?php
// Write a function, which takes a non-negative integer (seconds) as input and returns the time in a human-readable format (HH:MM:SS)

// HH = hours, padded to 2 digits, range: 00 - 99
// MM = minutes, padded to 2 digits, range: 00 - 59
// SS = seconds, padded to 2 digits, range: 00 - 59

// The maximum time never exceeds 359999 (99:59:59)

// You can find some examples in the test fixtures.

function human_readable($seconds)
{
    $seconds = abs($seconds);
    $hours = str_pad(floor($seconds / 3600), 2, 0,STR_PAD_LEFT) ;
    $minutes = str_pad(floor(($seconds / 60) % 60),2,0,STR_PAD_LEFT);
    $seconds = str_pad($seconds % 60,2,0, STR_PAD_LEFT);

   return "{$hours}:{$minutes}:{$seconds}";
}

$seconds = 86399;
$s2 = 359999;
$s3 = 60;

$test =  human_readable(60);

var_dump($test);