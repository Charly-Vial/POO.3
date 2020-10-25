<?php 
require_once 'HighWay.php';
require_once 'Bike.php';
require_once 'Skateboard.php';

final class PedestrianWay extends HighWay
{
    
    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct(1, 10);
    }

    public function addVehicle(Vehicule $Vehicule)
    {
        if ($Vehicule instanceof Bike || $Vehicule instanceof Skateboard) {
            $this->currentVehicles[] = $Vehicule; 
        }
    }

}
