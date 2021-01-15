<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

/* EXERCISE 6
Copy the classes of exercise 2.
change the properties to private.
Make a const barname with the value 'Het Vervolg'.
print the constant on the screen
create a function in beverage and use the constant.
Do the same in the beer class
print the output of these functions on the screen.
Make sure that every print is on a new line.
Use typehinting everywhere!
*/

class Beverage {

    private $color, $price, $temperature;
    const BARNAME = "Het Vervolg";

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() :string {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }

    public function getConst() :string {
        return "Deel 1: " . self::BARNAME;
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

    public function message() :string {
        return "Deel 2: " . self::BARNAME;
    }

}

$cola = new Beverage('black', 2);
$duvel = new Beer("Duvel", 8.5, "blond", 3.5);
echo Beverage::BARNAME;
echo "<br>";
echo $cola->getConst();
echo "<br>";
echo $duvel->message();




