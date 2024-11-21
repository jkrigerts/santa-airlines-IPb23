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

    public function getDistance() {
        $earthRadius = 6371; // Earth's radius in km

        $latFrom = deg2rad($this->origin->latitude);
        $lonFrom = deg2rad($this->origin->longitude);
        $latTo = deg2rad($this->destination->latitude);
        $lonTo = deg2rad($this->destination->longitude);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $a = sin($latDelta / 2) * sin($latDelta / 2) +
             cos($latFrom) * cos($latTo) *
             sin($lonDelta / 2) * sin($lonDelta / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return $earthRadius * $c;
    }

    public function getDuration() {
        $attalums = $this->getDistance();
        $atrums = $this->aircraft->atrums;

        $laiks = $attalums / $atrums * 60 + 30;

        return $laiks;
    }
}


