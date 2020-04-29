<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
// Do not modify the rest of the file
    /**
     * @var boolen
     */
    private $hasParkBrake;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy,bool $hasParkBrake)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->hasParkBrake=$hasParkBrake;
    }

    public function switchOn(): bool{
        return true;
    }


    public function switchOff(): bool{
        return false;
    }




    public function start()
    {
      if ($this->hasParkBrake==true)
      {throw new exception("you can not drive with  hand brake active");}
    }
    

    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
