<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

/* EXERCISE 7
Copy your solution from exercise 6
Make a static property in the Beverage class that can only be accessed from inside the class called address
which has the value "Melkmarkt 9, 2000 Antwerpen".
print the address without creating a new instant of the beverage class 2 times in two different ways.
Use typehinting everywhere!
*/

class Beverage {

    private $color, $price, $temperature;
    const BARNAME = "Het Vervolg";
    private static $address = "Melkmarkt 9, 2000 Antwerpen";

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

    public static function getAddress() {
        return self::$address;
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

// $cola = new Beverage('black', 2);
// $duvel = new Beer("Duvel", 8.5, "blond", 3.5);
// echo Beverage::BARNAME;
// echo "<br>";
// echo $cola->getConst();
// echo "<br>";
// echo $duvel->message();
// echo "<br>";
echo Beverage::getAddress();
echo "<br>";
echo Beer::getAddress();



