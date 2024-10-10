<?php
class Vehicle{
    public $name;
    public $speed;
    public $mileage;

    public function __construct($name,$speed,$mileage){
        $this->name=$name;
        $this->speed=$speed;
        $this->mileage=$mileage;
    } 
}
?>