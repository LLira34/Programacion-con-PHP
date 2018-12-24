<?php

include_once 'vehicle.php';

$car = Vehicle::create('car',4);
echo $car-> getType() . ": tiene " . $car->wheels . " ruedas" . "<br />";

$motorcycle = Vehicle::create('motorcycle',2);
echo $motorcycle-> getType() . ": tiene " . $motorcycle->wheels . " ruedas" . "<br />";

$trailer = Vehicle::create('trailer',12);
echo $trailer-> getType() . ": tiene " . $trailer->wheels . " ruedas" . "<br />";
