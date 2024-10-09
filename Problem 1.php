<?php
/* 1. Write a PHP program to create a Vehicle class with name, speed and mileage 
instance attributes. */

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

$vehicle = new Vehicle("Toyota Supra", "120 km/h", "15000 Kilometers");
$vehicle->displayDetails();

?>