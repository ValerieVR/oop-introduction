<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties protected.
Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/

class Beverage {

    protected $color, $price, $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() :string {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }
}

class Beer extends Beverage {
    protected $name, $alcoholpercentage;

    public function __construct(string $name, float $alcoholpercentage, string $color, float $price) {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholpercentage() {
        return $this->alcoholpercentage . "%";
    }

    public function getColor() :string {
        return $this->color;
    }

}

$duvel = new Beer("Duvel", 8.5, "blond", 3.5);
echo $duvel->getColor();
echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $duvel->getAlcoholpercentage();
echo "<br>";
