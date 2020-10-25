<?php 
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct(2, 50);
    }

    public function addVehicle(Vehicule $Vehicule)
    {
        $this->currentVehicles[] = $Vehicule;
    }

}
