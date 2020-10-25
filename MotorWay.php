<?php 
require_once 'HighWay.php';
require_once 'Car.php';

final class Motoway extends HighWay
{

    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct(4, 130);
    }

    public function addVehicle(Vehicule $Vehicule)
    {
        if ($Vehicule instanceof Car) {
            $this->currentVehicles[] = $Vehicule; 
        }
    }
}
