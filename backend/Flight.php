<?php
class Flight {
    // Publiskas īpašības
    public $flightCode;
    public $origin;
    public $destination;
    public $departureTime;
    public $aircraft;

    // Konstruktoram, lai inicializētu īpašības
    public function __construct($flightCode, $origin, $destination, DateTime $departureTime, Aircraft $aircraft) {
        $this->flightCode = $flightCode;
        $this->origin = $origin;
        $this->destination = $destination;
        $this->departureTime = $departureTime;
        $this->aircraft = $aircraft;
    }
}