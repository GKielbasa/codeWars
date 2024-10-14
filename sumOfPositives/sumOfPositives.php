<?php
function positive_sum($arr) {
    $sumOfPositiveNumbers = 0;
    if(!empty($arr)) {
        foreach($arr as $number) {
            if($number > 0) {
                $sumOfPositiveNumbers += $number;
            }
        }
    }
    return $sumOfPositiveNumbers;
}

positive_sum([2,2,-1,0]);