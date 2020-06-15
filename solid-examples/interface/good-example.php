<?php

interface CarInterface {
    public function drive();
}

interface AirplaneInterface {
    public function fly();
}

class FutureCar implements CarInterface, AirplaneInterface {
    
    public function drive() {
        return 'Driving a future car!';
    }
  
    public function fly() {
        return 'Flying a future car!';
    }
}

class Car implements CarInterface {
    
    public function drive() {
        return 'Driving a car!';
    }
}

class Airplane implements AirplaneInterface {
    
    public function fly() {
        return 'Flying an airplane!';
    }
}

$futureCar = new FutureCar;
var_dump($futureCar->drive());

$car = new Car;
var_dump($car->drive());

$plane = new Airplane;
var_dump($plane->fly());