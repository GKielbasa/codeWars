<?php

function digital_root($number): int
{
    while ($number >= 10) {
        $sum = 0;
        while ($number > 0) {
            $digit = $number % 10;
            $sum += $digit;
            $number = (int)($number / 10);
        }
        $number = $sum;
    }

    return $number;
}

digital_root(123);