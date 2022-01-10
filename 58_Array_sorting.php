<?php
    $food = array('orange', 'banana', 'grapes', 'apple');
    
    // sort($food);
    rsort($food);

    
    echo "<pre>";
    print_r($food);
    echo "<pre>";

    $food1 = array(
        "d" => "lemon",
        "a" => "orange",
        "b" => "banana",
        "c" => "apple"
    );

    // sort($food1);
    // asort($food1);
    // arsort($food1);
    // ksort($food1);
    krsort($food1);

    echo "<pre>";
    print_r($food1);
    echo "<pre>";

    $array1 = array("Img12.png", "Img10.png", "img2.png","img1.png");

    // natsort($array1);
    natcasesort($array1);

    echo "<pre>";
    print_r($array1);
    echo "<pre>";

    $vaggie = ['lemon', 'carrot', 'allo', 'khoco'];

    array_multisort($food, $vaggie);

    echo "<pre>";
    print_r($food);
    echo "<pre>";

    echo "<pre>";
    print_r($vaggie);
    echo "<pre>";

    // reverse
    $newArray = array_reverse($food);
    echo "<pre>";
    print_r($food);
    echo "<pre>";




?>