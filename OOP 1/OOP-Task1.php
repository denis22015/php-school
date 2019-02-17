<?php
class Automobile
{
    private $brand;
    private $year;
    private $model;
    private $vin;

    public function __construct($brand, $year, $model, $vin)
    {
        $this->brand = $brand;
        $this->year  = $year;
        $this->model = $model;
        $this->vin = $vin;
    }


    public function showInfo() {
        echo 'brand: ' . $this->brand . PHP_EOL;
        echo 'year: ' . $this->year . PHP_EOL;
        echo 'model: ' . $this->model . PHP_EOL;
        echo 'vin: ' . $this->vin . PHP_EOL;
    }
}

class Car extends Automobile
{
    private $equipment;

    public function __construct($brand, $year, $model, $vin, $equipment)
    {
        parent::__construct($brand, $year, $model, $vin);

        $this->equipment = $equipment;
    }

    public function showInfo()
    {
        parent::showInfo();
        echo 'equipment: ' . $this->equipment . PHP_EOL;
    }
}

class Truck extends Automobile
{
    private $capacity;

    public function __construct($brand, $year, $model, $vin, $capacity)
    {
        parent::__construct($brand, $year, $model, $vin);

        $this->capacity = $capacity;
    }

    public function showInfo()
    {
        parent::showInfo();
        echo 'capacity: ' . $this->capacity . PHP_EOL;
    }
}

$car    = new Car('Bugatti', 2016, 'Chiron', 195928, 'Powerful engine');
$truck  = new Truck('Kenworth', 1961, 'W900', 23423423, '100 tons');

$car->showInfo();
echo PHP_EOL;
$truck->showInfo();