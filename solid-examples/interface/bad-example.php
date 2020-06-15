<?php

interface VehicleInterface {
    public function drive();
    public function fly();
}

class FutureCar implements VehicleInterface {
    
    public function drive() {
        return 'Driving a future car!';
    }
  
    public function fly() {
        return 'Flying a future car!';
    }
}

class Car implements VehicleInterface {
    
    public function drive() {
        return 'Driving a car!';
    }
}

class Airplane implements VehicleInterface {
    
    public function fly() {
        return 'Flying an airplane!';
    }
}

$futureCar = new FutureCar;
var_dump($futureCar->drive());
