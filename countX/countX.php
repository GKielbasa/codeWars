<?php
//count x's and o's 
function XO($s) {
    $s = strtolower($s);

    return substr_count($s,'x') === substr_count($s,'o');
}

var_dump(XO('asadfsadf'));