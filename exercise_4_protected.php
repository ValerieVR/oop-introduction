<?php

declare(strict_types=1);

/* EXERCISE 4
Copy the code of excercise 2 to here and delete everything related to cola.
Make all properties protected.
Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/

class Beer extends Beverage {
    
    public $name;
    public $alcoholpercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholpercentage) {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    function getAlcoholpercentage() {
        return $this->alcoholpercentage ."%";
    }

}