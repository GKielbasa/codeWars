<?php
function getCount($str) {
  $vowelsCount = 0;
  $vovels = ['a','e','i','o','u'];
  $strToArr =  str_split($str);
  
  foreach($strToArr as $char) {
    if(in_array($char, $vovels)) {
     $vowelsCount ++;
    }
  }
  
  return $vowelsCount;
}