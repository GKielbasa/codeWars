<?php
function square_digits($num): int {
    $digits = str_split($num, 1);
    foreach ($digits as &$digit) {
        $digit = pow($digit, 2);
    }

    return (int)implode('', $digits);
}

var_dump(square_digits(1234));