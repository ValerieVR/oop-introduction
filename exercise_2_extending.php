<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

/* EXERCISE 2
Make class beer that extends from Beverage.
Create the properties name (string) and alcoholpercentage (float).
Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
Remember for now we will use properties and methods that can be accessed from everywhere.
Make a getAlcoholpercentage function which returns the alocoholpercentage.
Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
Also the name equal to Duvel and the alcohol percentage to 8,5%
print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

class Beverage {

    public $color, $price, $temperature;

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
    public $name, $alcoholpercentage;

    public function __construct(string $name, float $alcoholpercentage, string $color, float $price) {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholpercentage() {
        return $this->alcoholpercentage . "%";
    }

}

$cola = new Beverage('black', 2);
$duvel = new Beer("Duvel", 8.5, "blond", 3.5);
echo $duvel->color;
echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $duvel->getAlcoholpercentage();
echo "<br>";
echo $cola->getAlcoholpercentage();



