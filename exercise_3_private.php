<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

/* EXERCISE 3
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/

class Beverage {

    private $color, $price, $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() :string {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }

    public function getColor() :string {
        return $this->color;
    }

}

class Beer extends Beverage {
    private $name, $alcoholpercentage;

    public function __construct(string $name, float $alcoholpercentage, string $color, float $price) {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholpercentage() {
        return $this->alcoholpercentage . "%";
    }

    private function beerInfo() :string {
        return "Hi i'm {$this->name} and have an alochol percentage of {$this->alcoholpercentage} and I have a {$this->getColor()} color.";
    }

    // public function get_beerInfo() :string {
    //     return $this->beerInfo();
    // }

}


$duvel = new Beer("Duvel", 8.5, "light", 3.5);
echo $duvel->getColor();
echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $duvel->getAlcoholpercentage();
echo "<br>";
echo $duvel->beerInfo();
// echo $duvel->get_beerInfo();



