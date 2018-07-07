<?php

function displayResult(Fibonacci $fibo, $sequence = 10) {
    echo "\nFibonacci - " . $fibo->getName() . ":\n";
    echo implode(", ", $fibo->getResult($sequence)) . "\n";
}
