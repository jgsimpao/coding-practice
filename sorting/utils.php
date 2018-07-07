<?php

function swap(&$a, &$b) {
    $temp = $a;
    $a    = $b;
    $b    = $temp;
}

function parseString($array) {
    return implode(', ', $array);
}

function createUnsorted($count = 10) {
    $array = [];

    for ($i = 0; $i < $count; $i++) {
        $array[] = rand(0, 99);
    }

    return $array;
}

function displayResult(Sort $sortType, $count = 10) {
    echo "\n" . $sortType->getName() . ":\n\n";

    for ($i = 1; $i <= $count; $i++) {
        $unsorted = createUnsorted();
        echo "Array $i:\n";
        echo "Input:  " . parseString($unsorted) . "\n";
        echo "Output: " . parseString($sortType->sort($unsorted)) . "\n\n";
    }
}
