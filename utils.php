<?php

function swap(&$a, &$b) {
    $temp = $a;
    $a    = $b;
    $b    = $temp;
}

function parseString($array) {
    return implode(', ', $array);
}
