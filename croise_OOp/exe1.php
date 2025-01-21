<?php
class ThisVehicle
{
    public $brand;
    public $model;
    public $year;

    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function start()
    {
        echo "Vehicle started";
    }
    public function stop()
    {
        echo "Vehicle stopped";
    }
    public function getInfo()
    {
        echo "{$this->brand}{$this->model}{$this->year}";
    }
}


class Ccear extends ThisVehicle
{
    public  $fuelType;

    public function __construct($brand, $model, $year, $fuelType)
    {
        parent::__construct($brand, $model, $year);
        $this->fuelType = $fuelType;
    }

    public function refuel($liters)
    {
        echo "the car is {$this->fuelType}, {$liters}";
    }

    public function getInfo()
    {
        echo "{$this->brand}{$this->model}{$this->year}{$this->fuelType}";
    }
}
class motorcycle extends ThisVehicle
{
    public $engineCapacity;

    public function revEngine(): void
    {
        echo "the car is {$this->engineCapacity}";
    }

    public function getInfo()
    {
        echo "{$this->brand}{$this->model}{$this->year}{$this->engineCapacity}";
    }
}

$new = new Ccear("toyota","hybrid",15,"fuel good");
$new->getInfo();
