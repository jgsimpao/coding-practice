<?php

abstract class Fibonacci
{
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function getResult($sequence);

    public function getName() {
        return $this->name;
    }
}

class FiboIteration extends Fibonacci
{
    private $fiboArray = [];

    public function __construct() {
        parent::__construct('Iteration');
    }

    public function getResult($sequence) {
        for ($i = 0; $i < $sequence; $i++) {
            if ($i <= 1) {
                $this->fiboArray[] = $i;
            } else {
                $this->fiboArray[] = $this->fiboArray[$i - 1] + $this->fiboArray[$i - 2];
            }
        }

        return $this->fiboArray;
    }
}

class FiboRecursion extends Fibonacci
{
    private $fiboArray = [];

    public function __construct() {
        parent::__construct('Recursion');
    }

    private function fibonacci($sequence) {
        if ($sequence <= 0) {
            return 0;
        } elseif ($sequence == 1) {
            return 1;
        }

        return $this->fibonacci($sequence - 1) + $this->fibonacci($sequence - 2);
    }

    public function getResult($sequence) {
        for ($i = 0; $i < $sequence; $i++) {
            $this->fiboArray[] = $this->fibonacci($i);
        }

        return $this->fiboArray;
    }
}

class FiboGenerator extends Fibonacci
{
    private $fiboArray = [];

    public function __construct() {
        parent::__construct('Generator');
    }

    private function fibonacci($sequence) {
        $prev1 = 0;
        $prev2 = 1;

        for ($i = 0; $i < $sequence; $i++) {
            if ($i <= 1) {
                yield $i;
            } else {
                $curr = $prev1 + $prev2;
                yield $curr;

                $prev1 = $prev2;
                $prev2 = $curr;
            }
        }
    }

    public function getResult($sequence) {
        foreach ($this->fibonacci($sequence) as $num) {
            $this->fiboArray[] = $num;
        }

        return $this->fiboArray;
    }
}
