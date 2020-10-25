<?php
require_once 'Vehicule.php';

abstract class HighWay 
{
    /**
    * @var array
    */
    protected $currentVehicule = [];

    /**
    * @var integer
    */
    protected $nbLane;

    /**
    * @var integer
    */
    protected $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicule $Vehicule);


    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        
        $this->maxSpeed = $maxSpeed;
    }




}