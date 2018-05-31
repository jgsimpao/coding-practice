<?php

abstract class Sort
{
    private $name;

    protected function __construct($name) {
        $this->name = $name;
    }

    abstract public function sort($array);

    public function getName() {
        return $this->name;
    }
}

class BubbleSort extends Sort
{
    public function __construct() {
        parent::__construct('Bubble Sort');
    }

    public function sort($array) {
        for ($i = count($array) - 1; $i > 0; $i--) {
            for ($j = 0; $j < $i; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    swap($array[$j], $array[$j + 1]);
                }
            }
        }

        return $array;
    }
}

class SelectionSort extends Sort
{
    public function __construct() {
        parent::__construct('Selection Sort');
    }

    public function sort($array) {
        for ($i = 0; $i < count($array) - 1; $i++) {
            $min = $array[$i];
            $minIdx = $i;

            for ($j = $i + 1; $j < count($array); $j++) {
                if($array[$j] < $min) {
                    $min = $array[$j];
                    $minIdx = $j;
                }
            }

            swap($array[$i], $array[$minIdx]);
        }

        return $array;
    }
}

class InsertionSort extends Sort
{
    public function __construct() {
        parent::__construct('Insertion Sort');
    }

    public function sort($array) {
        for ($i = 1; $i < count($array); $i++) {
            for ($j = $i; $j > 0; $j--) {
                if($array[$j] < $array[$j - 1]) {
                    swap($array[$j], $array[$j - 1]);
                }
            }
        }

        return $array;
    }
}

class MergeSort extends Sort
{
    public function __construct() {
        parent::__construct('Merge Sort');
    }

    public function sort($array) {
        if (count($array) == 1) {
            return $array;
        }

        $firstHalf = array_slice($array, 0, count($array) / 2);
        $secondHalf = array_slice($array, count($array) / 2);

        return merge($firstHalf, $secondHalf);
    }

    public function merge($firstHalf, $secondHalf) {
        $array = [];

        while () {
            
        }

        for ($i = 0; $i < count($firstHalf); $i++) {
            if ($firstHalf[$i] < $secondHalf[$j]) {
                $array[] = $firstHalf[$i];
                break;
            }
        }

        for ($i = 0; $i < count($firstHalf); $i++) {
            if ($firstHalf[$i] < $secondHalf[$j]) {
                $array[] = $firstHalf[$i];
                break;
            }
        }

        return $array;
    }
}
