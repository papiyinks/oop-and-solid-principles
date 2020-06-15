<?php

class Mother {
    
    public function getEyeCount()
    {
        return 2;
    }
}

class Child extends Mother {

}

var_dump((new Child)->getEyeCount());

// ..

abstract class Shape {
    protected $color;

    public function __construct($color ='red')
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

}

class Square extends Shape {

    public function getColor()
    {
        return 'green';
    }
}

class Triangle extends Shape {

    public function getColor() 
    {
        return 'blue';
    }
}

class Circle extends Shape {

}

$square = new Square;
$circle = new Circle;

echo $square->getColor();
echo $circle->getColor();