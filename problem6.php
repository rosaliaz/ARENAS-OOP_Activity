<?php 
class Vehicle{
    public $name;
    public $speed;
    public $mileage;
    public $capacity;

    public function __construct($name,$speed,$mileage,$capacity){
        $this->name=$name;
        $this->speed=$speed;
        $this->mileage=$mileage;
        $this->capacity=$capacity;
    }

    public function fare(){
        $totalFare = $this->capacity*100;
        return $totalFare;
    }

}

class Bus extends Vehicle{
    public function fare(){
        $totalFare = $this->capacity*100;
        $maintenance = $totalFare * 0.10; // Vehicle is Bus instance = extra 10% on full fare as a maintenance charge
        $finalAmount = $totalFare + $maintenance;

        return $finalAmount;
    }
}
// testing
$Bus = new Bus("Volvo","120 kmh","20 MPG",50);
echo "Bus fare amount: ". $Bus->fare();
?> 