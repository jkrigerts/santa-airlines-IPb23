<?php
include_once "Aircraft.php";
include_once "Airport.php";
include_once 'Flight.php';

echo "I am alive 🌍 <br><br>";

$manaLidmasina = new Aircraft("Airbus", "A220-300", 120, 850);
$origin = new Airport("RIX", 56.924, 23.971);
$destination = new Airport("JFK", 40.6413, -73.7781); // John F. Kennedy International Airport
$departureTime = new DateTime();
$flight = new Flight("SA503", $origin, $destination, $departureTime, $manaLidmasina);

var_dump($flight);

echo "<br>" . $flight->getDistance();

echo "<br>" . $flight->getDuration();

