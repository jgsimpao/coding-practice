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

            for ($j = $i; $j < count($array); $j++) {
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
