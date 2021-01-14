<?php

declare(strict_types=1);

/* EXERCISE 3
Copy the code of excercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that u use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/
class Beverage {

    public $color, $price, $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    function getInfo() :string { 
        return "This beverage is {$this->color} and {$this->temperature}.<br>";
    }
    
}

class Beer extends Beverage {
    
    private $name;
    private $alcoholpercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholpercentage) {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    function getAlcoholpercentage() {
        return $this->alcoholpercentage ."%";
    }

    private function beerInfo() {
        return "Hi i'm {$this->name} and have an alochol percentage of {$this->alcoholpercentage} and I have a {$this->color} color.";
    }

    function get_beerInfo() {
        return $this->beerInfo();
    }

}

$duvel = new Beer("light", 3.5, "Duvel", 8.5);
echo $duvel->color;
echo "<br>";
echo $duvel->get_beerInfo();

