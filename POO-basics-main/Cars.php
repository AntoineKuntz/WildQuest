<?php

  class Cars
  {
    private $color;
    private $currentSpeed;
    private $nbSeats;
    private $nbWheels;
    private $energy;
    private $energyLevel;


    public function __construct(string $color, int $nbSeats,string $energy)
      {
          $this->color = $color;
          $this->nbSeats = $nbSeats;
          $this->energy = $energy;
      }

    public function forward()
    {
        $this->currentSpeed;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    
    public function start(){
        $this->currentSpeed = 20;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): string
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }

  }
