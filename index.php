<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue');
$bike->setCurrentSpeed(0);

$bike->dump();

$auto = new Car('grey', 5, 'gasoil');
$auto->setCurrentSpeed(0);
$auto->setNbWheels(4);
$auto->setFuelLevel(100);

$auto->dump();

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo $auto->forward();
echo '<br> Vitesse de la voiture : ' . $auto->getCurrentSpeed() . ' km/h' . '<br>';
echo $auto->brake();
echo '<br> Vitesse de la voiture : ' . $auto->getCurrentSpeed() . ' km/h' . '<br>';
echo $auto->brake();
