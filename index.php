<?php
    declare(strict_types=1);

    require "exercise_1_classes.php";
    require "exercise_2_extending.php";
    require "exercise_3_private.php";
    require "exercise_4_protected.php";
    require "exercise_5_public.php";
    require "exercise_6_const.php";
    require "exercise_7_static.php";


    function new_exercise($x) {
        $block = "<hr/><strong>Exercise $x:</strong><br/>";
        echo $block;
    }

    new_exercise(1);
    $cola = new Beverage("black", 2);
    echo $cola->getInfo();
    echo $cola->temperature;

    new_exercise(2);
    new_exercise(3);
    new_exercise(4);
    new_exercise(5);
    new_exercise(6);
    new_exercise(7);

 

