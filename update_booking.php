<?php
declare(strict_types=1);

// update_booking.php <id>
require_once "bootstrap.php";

$id = $argv[1];

$floatDecimal = $entityManager->find('BookingWithFloatDecimal', $id);

// Note: Nothing is updated on entity
$entityManager->persist($floatDecimal);
$entityManager->flush();

$decimal = $entityManager->find('BookingWithDecimal', $id);

// Note: Nothing is updated on entity
$entityManager->persist($decimal);
$entityManager->flush();

$floatFloat = $entityManager->find('BookingWithFloatFloat', $id);

// Note: Nothing is updated on entity
$entityManager->persist($floatFloat);
$entityManager->flush();
