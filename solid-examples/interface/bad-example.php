<?php

class Kitchen 
{
    protected $stations;
    
    public function __construct($stations = array()) {
        $this->stations = $stations;
    }
    
    public function sum() {
        $area = [];
        
        foreach($this->shapes as $shape) {
            $area[] = $shape->area();
        }
    
        return array_sum($area);
    }

    public function mealOrder()
    {
        
    }
}