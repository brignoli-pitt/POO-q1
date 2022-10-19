<?php
require_once 'Bicycle.php';
require_once 'Car.php';


// Bike
$bike = new Bicycle( 'blue');
$bike->setCurrentSpeed(12) ;

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br><br>';

// Homer Car
$theHomer = new Car ('green', 4, 'beer');
$theHomer->setCurrentSpeed(43);

//Moving car
echo $theHomer->forward();
echo '<br>' . $theHomer->start();
echo '<br> Car speed : ' . $theHomer->getCurrentSpeed(). ' km/h' . '<br>';
echo $theHomer->brake();
echo '<br> Car speed : ' . $theHomer->getCurrentSpeed() . ' km/h' . '<br>';
echo $theHomer->brake() . '<br><br>';
