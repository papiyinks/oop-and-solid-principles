<?php

interface ObjectArithmetics {

    /**
     *
     * @return array
     */
    public function getAll();
}


// Good example

class Calculator implements ObjectArithmetics {

    public function getAll()
    {
        // Returns a solved array of objects
        return [(1+2), (2*6), (8/2)];
    }
}

$file = new Calculator;
var_dump($file->getall());