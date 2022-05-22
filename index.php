<?php

require_once 'Vehicle.php';
require_once 'Bike.php';
require_once 'ElectricBike.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Bus.php';
require_once 'Skateboard.php';

require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

require_once 'ChargingStation.php';
require_once 'RechargeableInterface.php';

require_once 'Speedometer.php';

echo Speedometer::convertKmToMiles(10) . '</br>';
echo Speedometer::convertMilesToKm(6.21371);

// $bike = new Bike('red', 1);

// $bike->setCurrentSpeed(5);
// $bike->switchOn();
// echo 'Light state of the bike : ' . $bike->getLightState() . PHP_EOL;

// $bike->forward();
// $bike->switchOn();
// echo $bike->getLightState() . PHP_EOL;

// $bike->switchOff();
// echo $bike->getLightState() . '</br>';

// // $bike = new Bike('blue', 1);

// // $skateboard = new Skateboard('black', 0);

// $tesla = new Car('black', 4, 'electric');
// // $ferrari = new Car('red', 2, 'fuel');

// $tesla->switchOn();
// echo 'Light state of the tesla car : ' . $tesla->getLightState() . PHP_EOL;
// $tesla->switchOff();
// echo $tesla->getLightState();

// $tesla->setParkBrake(true);
// var_dump($tesla);

// try {
//     $tesla->start();
// } catch(Exception $e) {
//     echo 'Exception received : ' . $e->getMessage() . PHP_EOL;
//     $tesla->setParkBrake(false);
//     var_dump($tesla);
// } finally {
//     echo 'Ma voiture roule comme un donut' . PHP_EOL;
// }

// echo $tesla->start();

// $schoolBus = new Bus('yellow', 40);

// $americanTruck = new Truck('purple', 4, 'fuel', 100);
// $frenchTruck = new Truck('blue', 3, 'hydrogen', 75);
// $germanTruck = new Truck('red', 2, 'electric', 55);

// $motorway = new MotorWay();
// echo $motorway->addVehicle($bike);
// echo $motorway->addVehicle($skateboard);
// $motorway->addVehicle($tesla);
// $motorway->addVehicle($ferrari);
// $motorway->addVehicle($schoolBus);
// var_dump($motorway);

// $pedestrianWay = new PedestrianWay();
// echo $pedestrianWay->addVehicle($tesla);
// echo $pedestrianWay->addVehicle($schoolBus);
// echo $pedestrianWay->addVehicle($americanTruck);
// $pedestrianWay->addVehicle($bike);
// $pedestrianWay->addVehicle($skateboard);
// var_dump($pedestrianWay);

// $residentialWay = new ResidentialWay();
// $residentialWay->addVehicle($tesla);
// $residentialWay->addVehicle($ferrari);
// $residentialWay->addVehicle($schoolBus);
// $residentialWay->addVehicle($bike);
// $residentialWay->addVehicle($skateboard);
// var_dump($residentialWay);


// var_dump($americanTruck, $frenchTruck, $germanTruck);

// echo $americanTruck->getStorageCapacity() . PHP_EOL;
// echo $americanTruck->getInitialStorage() . PHP_EOL;
// echo $americanTruck->isFilled() . PHP_EOL;
// echo $americanTruck->fill() . PHP_EOL;
// echo $americanTruck->isFilled() . PHP_EOL;

// echo $frenchTruck->getStorageCapacity() . PHP_EOL;
// echo $frenchTruck->getInitialStorage() . PHP_EOL;
// echo $frenchTruck->isFilled() . PHP_EOL;
// echo $frenchTruck->fill() . PHP_EOL;
// echo $frenchTruck->isFilled() . PHP_EOL;

// echo $germanTruck->getStorageCapacity() . PHP_EOL;
// echo $germanTruck->getInitialStorage() . PHP_EOL;
// echo $germanTruck->isFilled() . PHP_EOL;
// echo $germanTruck->fill() . PHP_EOL;
// echo $germanTruck->isFilled() . PHP_EOL;


// var_dump(Car::ALLOWED_ENERGIES);


// $bike = new Bike('blue', 1);

// echo $bike->forward();

// var_dump($bike);

// $car = new Car('green', 4, 'electric');

// echo $car->forward();

// var_dump($car);




// Instanciation d'un nouvel objet classe Car $deuxChevaux
// $deuxChevaux = new Car('white', 4, 'fuel');

// var_dump($deuxChevaux);

// if (isset($deuxChevaux->nbWheels)) {
//     echo $deuxChevaux->getNbWheels();
// }

// echo $deuxChevaux->start();
// echo $deuxChevaux->forward();
// var_dump($deuxChevaux);
// echo $deuxChevaux->brake();
// var_dump($deuxChevaux);




// Instanciation d'un nouvel objet classe Car $mini
// $mini = new Car('green', 4, 'electric');



// Instanciation d'un nouvel objet $bike

// $bike = new Bike('blue', 2);

// var_dump($bike);

// $bike->setCurrentSpeed(0);

// var_dump($bike);

// // Moving bike

// echo $bike->forward();

// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

// echo $bike->brake();

// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

// echo $bike->brake();

// var_dump($bike);




// Instanciation d'un nouvel objet $rockrider

// $rockrider = new Bike('yellow', 2);



// Instanciation d'un nouvel objet $tornado

// $tornado = new Bike('black', 2);

// $tornado->forward();
