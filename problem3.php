<?php
include 'problem1.php';

class Bus extends Vehicle{
   
}

// testing 
$Bus = new Bus("Scania","90 kmh","18.2 MPG");
echo $Bus->name. "<br>";
echo $Bus->speed. "<br>";
echo $Bus->mileage. "<br>";

?>