<?php 
include 'problem1.php';

class Bus extends Vehicle{
    public $capacity;

    public function seating_capacity($capacity){
        $this->capacity=$capacity;
        
        return $capacity;
    }

}

// testing
$Bus =new Bus("Toyota","110 kmh","18 MPG");
echo "The seating capacity of ". $Bus->name. " is ". $Bus->seating_capacity(50);

?>