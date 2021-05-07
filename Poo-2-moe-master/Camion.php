<?php

require_once 'Vehicle.php';

Class Camion extends Vehicle
{

	private $energy;
	private $capacity;
	private $currentCharge = 0;


    		const ALLOWED_ENERGIES = [
		'essence',
		'electricité',];
     
        public function __construct(string $color, int $nbSeats, string $energy, int $capac
		{
			parent::__construct($color, $nbSeats);
			$this->setEnergy($energy);
			$this->capacity = $capacity;
		}
        public function start() : string
		{
			return   'On est parti !';
		}
        public function isFull() : string
		{
			if ($this->currentCharge >= $this->capacity)
			{
				$message = 'Le camion est plein';
			} else {
				$message = 'Il y a encore de la place';
			}
			return $message;
        }

		public function getCapacity(): int
		{
		return $this->capacity;
		}
		
		public function setCapacity(int $capacity): void
		{
			$this->capacity = $capacity;
		}
	
		public function getCurrentCharge(): int
		{
			return $this->currentCharge;
		}

		public function setCurrentCharge(int $currentCharge): void
		{
			$this->currentCharge = $currentCharge;
		}

		public function getEnergy ():string
		{
			return $this->energy;
		}
		public function setEnergy ( string $energy) : Camion
			{
				if (in_array ($energy, self::ALLOWED_ENERGIES))
				 {
					$this->energy = $energy;
				}
				return $this;
			}

}