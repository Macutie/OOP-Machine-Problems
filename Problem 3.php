<?php
/* 3. Create a child class Bus that will inherit all of the variables and methods of the 
Vehicle class in Problem #1. */

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

}

$bus = new Bus("Victory Liner", "80 km/h", "50000 Kilometers");
$bus->displayDetails();

?> 