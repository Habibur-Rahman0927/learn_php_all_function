<?php

    function myFunction($n, $m){
        return $n . "-" . $m;
    };
    
    $a = ['lemon', 'orange', 'banana'];

    $newArray = array_reduce($a, 'myFunction','apple');
    echo "<pre>";
    print_r($newArray);
    echo "<pre>";

    $b = [1,2,3,4,4,5];

    $newArray1 = array_reduce($b, 'myFunction',20);
    echo "<pre>";
    print_r($newArray1);
    echo "<pre>";

?>