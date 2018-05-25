<?php

class Data
{
    public function createUnsorted($count = 10) {
        $array = [];

        for ($i = 0; $i < $count; $i++) {
            $array[] = rand(0, 99);
        }

        return $array;
    }
}
