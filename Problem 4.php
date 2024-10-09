<?php
/* 4. Create a Bus class that inherits from the Vehicle class in Problem #1. Give the 
capacity argument of Bus->seating_capacity() a default value of 50. */
class Vehicle {
    public $name;
    public $speed;
    public $mileage;
    
    function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;

    }

    function displayDetails(){
        echo "Name: $this->name\n";
        echo "Speed: $this->speed\n";
        echo "Mileage: $this->mileage\n";
    }
}

class Bus extends Vehicle {
    function seating_capacity($capacity = 50) {
        echo "Seating capacity: $capacity\n";
    }
}

$bus = new Bus("Victory Liner", "80 km/h", "50000 Kilometers");
$bus->displayDetails();
$bus->seating_capacity();
?> 