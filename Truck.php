<?php
require_once 'Vehicle.php';
class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    const MAX_STORAGE=100;
    CONST MIN_STORAGE=0;
    private $storageCapacity;
    private $loading=0;
    private $energy;


    public function __construct(int $storageCapacity,string $color, int $nbSeats, string $energy,int $loading)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity=$storageCapacity;
        $this->loading=$loading;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    

    public function getStorageCapacity():int{
        return $this->storageCapacity;
    }


    public function setStorageCapacity($storageCapacity): Truck
    {
        return $this->storageCapacity=$storageCapacity;
    }



    public function getLoading():int{
        return $this->loading;
    }


    public function setLoading($loading): Truck
    {
        return $this->loading=$loading;
    }

    public function isFull (): string
    {
        $result = '';
        if ($this->loading < self::MAX_STORAGE) {
            $result = 'in filling';
        }else{
            $result='Full';
        }
        return $result;
    }
}