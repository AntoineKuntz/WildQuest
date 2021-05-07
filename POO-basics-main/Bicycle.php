<?php 
class Bicycle
{
    public string $color;

    public int $currentSpeed;

    public int $nbSeats = 1;

    public int $nbWheels = 2;

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

      public function getColor(): string
      {
          return $this->color;
      }
      public function setColor(string $color) : void
      {
          $this->color = $color;
      }

      public function __construct(string $color, int $currentSpeed)
      {
          $this->color = $color;
          $this->currentSpeed = $currentSpeed;
      }

      public function getCurrentSpeed(): int
      {
          return $this->currentSpeed;
      }

      public function setCurrentSpeed(int $currentSpeed): void
      { 
          if($currentSpeed >= 0){
          $this->currentSpeed = $currentSpeed;
          }
      }


}

?>
