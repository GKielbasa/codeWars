<?php
function solution($str, $ending) {
    $strEndignPart = substr($str,strlen($str) - strlen($ending));
    
    return $strEndignPart === $ending;
}
