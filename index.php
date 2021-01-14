<?php
    declare(strict_types=1);

    require 'exercise_1_classes.php';

    $cola = new Beverage("black", 2);

    echo $cola->getInfo();
    echo $cola->temperature;