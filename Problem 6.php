<?php
/* 6. Create a Bus child class that inherits from the Vehicle class. The default fare 
charge of any vehicle is seating capacity * 100. If Vehicle is Bus instance, we 
need to add an extra 10% on full fare as a maintenance charge. So total fare for 
bus instance will become the final amount = total fare + 10% of the total fare. 
Note: The bus seating capacity is 50. so, the final fare amount should be 5500. 
You need to override the fare() method of a Vehicle class in Bus class. */

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
    public function fare($capacity) {
        return $capacity * 100;
    }
}

class Bus extends Vehicle {
    function seating_capacity($capacity = 50){
        echo "Seating capacity : $capacity\n";
    }
    public function fare($capacity = 50) {
        $baseFare = parent::fare($capacity);
        $maintenanceCharge = $baseFare * 0.10;
        $totalFare = $baseFare + $maintenanceCharge;
        return $totalFare;
    }
}

$bus = new Bus("Victory Liner", "80 km/h", "50000 Kilometers");
$bus->displayDetails();
$bus->seating_capacity();
echo "The final fare amount for the bus is: ₱" . $bus->fare();

?>
