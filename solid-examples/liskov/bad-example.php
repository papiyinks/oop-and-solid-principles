There are 5 major principles

<?php

// 1. Child function arguments must match function arguments of parent

// 2 Child function return type must match parent function return type

class ParentClass 
{
    public $id;

    public function setId(int $id, string $name) : void
    {
        $this->id = $id;

        $this->name = $name;
    }
}

class ChildClass 
{
    public $id;

    public function setId(int $id) : int
    {
        $this->id = $id;

        return $this->id;
    }
}

// 3 Child pre-conditions cannot be greater than parent function pre-conditions

function addFive($number)
{
    // pre-condition
    if(!is_integer($number)) {
        throw new \Exception;
    }

    $total = $number + 5;

    //post-condition
    if(!is_integer($total)) {
        throw new \Exception;
    }
    return $total;
}

function addFive(int $number): int
{
    return $number + 5;
}

// 4 Child post-conditions cannot be lesser than parent function post-conditions

// 5 Exceptions thrown by child method must be the same from an exception thrown by the parent 

class File 
{
    public function parse($file)
    {
        // parse file
    }
}

class JsonFile extends File 
{
    public function parse($file)
    {
        if(pathinfo($file, $options = PATHINFO_EXTENSION) !== 'json') {
            throw new \Exception;
        }

        // parse json file
    }
}

