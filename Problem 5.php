<?php
/* 5. Using the Vehicle, Bus, and Car classes, define a property that must have the 
same value for every class instance (object).  */

class Vehicle {
    public $name;
    public $speed;
    public $mileage;
    const maxSpeed = "200 km/h";

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
    function displayMaxSpeed() {
        echo "Max Speed: " . self::maxSpeed . "\n";

    }
}

class Bus extends Vehicle {
    
}

class Car extends Vehicle {

}

$vehicle = new Vehicle("Toyota Supra", "120 km/h", "15000 Kilometers");
$vehicle->displayDetails();
$vehicle->displayMaxSpeed();
echo "\n";

$bus = new Bus("Victory Liner", "80 km/h", "50000 Kilometers",);
$bus->displayDetails();
$bus->displayMaxSpeed();
echo "\n";

$car = new Car("Porsche 911", "150 km/h", "10000 Kilometers");
$car->displayDetails();
$car->displayMaxSpeed();
echo "\n";

?> 