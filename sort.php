<?php

 class Sort
 {
    public function bubbleSort($array) {
        for ($i = count($array) - 1; $i > 0; $i--) {
            for ($j = 0; $j < $i; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    swap($array[$j], $array[$j + 1]);
                }
            }
        }

        return $array;
    }

    public function selectionSort($array) {
        for ($i = 0; $i < count($array) - 1; $i++) {
            $min = null;

            for ($j = $i; $j < count($array); $j++) {
                if($array[$j] < $min || $min == null) {
                    $min = $array[$j];
                }
            }

            $array[$i] = $min;
        }

        return $array;
    }

    public function displayResult($sortType, $count = 10) {
        $data = new Data;
        echo "\n{$sortType}:\n\n";

        for ($i = 1; $i <= $count; $i++) {
            $unsorted = $data->createUnsorted();
            echo "Array $i:\n";
            echo "Input:  " . parseString($unsorted) . "\n";
            echo "Output: " . parseString($sortFunc($unsorted)) . "\n\n";

            switch ($sortType) {
                case 'bubble':
                    $name = 'Bubble Sort';
                    $serialized = 
                    break;
            }
        }
    }
 }
