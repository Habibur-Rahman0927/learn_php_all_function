<?php
    $color = ["red", "green", "blue", "yellow", "brown"];
    $newArray = array_rand($color, 2);

    echo "<pre>";
    print_r($newArray);
    echo "<pre>";
    echo $color[$newArray[0]]."<br>";
    echo $color[$newArray[1]];

    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

    $newArray1 = array_rand($a1,2);

    echo "<pre>";
    print_r($newArray1);
    echo "<pre>";

    // shuffle

    shuffle($color);
    shuffle($a1);
    echo "<pre>";
    print_r($color);
    echo "<pre>";
    echo "<pre>";
    print_r($a1);
    echo "<pre>";


?>