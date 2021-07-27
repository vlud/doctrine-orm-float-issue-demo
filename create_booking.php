<?php
declare(strict_types=1);

// create_booking.php <name>
require_once "bootstrap.php";

$name = $argv[1];

$floatDecimal = new BookingWithFloatDecimal();
$floatDecimal->setName($name);

$floatFloat = new BookingWithFloatFloat();
$floatFloat->setName($name);

$decimal = new BookingWithDecimal();
$decimal->setName($name);

$entityManager->persist($floatDecimal);
$entityManager->persist($decimal);
$entityManager->persist($floatFloat);
$entityManager->flush();

echo "Created Booking float decimal with ID " . $floatDecimal->getId() . "\n";
echo "Created Booking float float with ID " . $floatFloat->getId() . "\n";
echo "Created Booking decimal with ID " . $decimal->getId() . "\n";

$entityManager->persist($floatDecimal);
$entityManager->persist($decimal);
$entityManager->persist($floatFloat);
$entityManager->flush();
