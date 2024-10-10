<?php
class Vehicle{

    public static $transmission = "Manual";
    public $name;
    public $speed;
    public $mileage;

    public function __construct($name,$speed,$mileage){
        $this->name=$name;
        $this->speed=$speed;
        $this->mileage=$mileage;
    }
    public function getTransmission(){
        return Vehicle::$transmission;
    }
}

class Bus extends Vehicle{
    public $capacity;

    public function getCapacity($capacity){
        return $this->capacity=$capacity;
    }
    
}
class Car extends Vehicle{
    public $engineType;

    public function getEngineType($engineType){
        return $this->engineType=$engineType;
    }
}

// TESTING 
$Vehicle1 = new Bus("City Bus","40 kmh","6.5MPG");
$Vehicle2 = new Car("Toyota","110 kmh","18 MPG");


echo "The Capacity of ".$Vehicle1->name." is ". $Vehicle1->getCapacity(50). "<br>";
echo "The Engine type of ". $Vehicle2->name." is ". $Vehicle2->getEngineType("Diesel"). "<br>";

echo "Transmission of ". $Vehicle1->name." is ". $Vehicle1->getTransmission(). "<br>";
echo "Transmission of ". $Vehicle2->name." is ". $Vehicle2->getTransmission(). "<br>";

?>