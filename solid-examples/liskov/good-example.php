<?php

abstract class Vehicle 
{     
    public function startEngine() 
    {
        // Default engine start functionality                
    }
     
    public function accelerate() 
    {
        // Default acceleration functionality
    }
}


class Car extends Vehicle
{
    // Empty class
}

class Motorcycle extends Vehicle
{
    // Empty class
}