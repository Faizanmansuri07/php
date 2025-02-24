<?php

    $num = -10.23;

    // 1: abs(num)
    // return absolute value
    echo "<br>".abs($num);

    // 2 : round($num)
    // return the nearest integer
    echo "<br>".round($num);

    // 3 : ceil(num)
    // return next integer
    echo "<br>".ceil($num);

    // 4 : floor(num)
    // return preveios integer
    echo "<br>".floor($num);

    // 5 : min()
    echo "<br> min : ".min(10,20,12,4,7);

    // 6 :max()
    echo "<br>".max(20,30,20,10);
    

    //power and root functions

    //1 ; pow(base,exponent)
    // return power of number
    echo "<br>".pow(2,3);

    // 2 : sqrt(num)
    // return square root of a num
    echo "<br>".sqrt(4);

    // random number function

    //1 : rand(min, max)
    // generate rendom number btw min and max
    echo "<br>".rand(1, 10);

    // 2 : mt_rand(min, max);
    // faster than rand
    echo "<br>".mt_rand(1,10);

    // 3 : random_int(min, max);
    echo "<br>".random_int(1,20);

?>