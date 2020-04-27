<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric',true);
var_dump($car);
try{
     $car->start();
}catch(exception $e){
    echo $e->getMessage()."<br>";
     $car->setParkBrake(false);
     var_dump($car);
}
finally {
    echo "Ma voiture roule comme un donut";
}
echo"<br>";

$benz=new Truck(50,'red',3,'electric',15);
echo $benz->forward();
echo $benz->brake();
echo $benz->isFull();
var_dump($benz);
$benz=new Truck(50,'red',3,'electric',200);
echo $benz->forward();
echo $benz->brake();
echo $benz->isFull();
var_dump($benz);