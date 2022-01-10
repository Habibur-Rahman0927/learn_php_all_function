<?php
    $color = array("a" => "red", "b" => "green", "c" => "red", "d" => "yellow");

    $newArray = array_values($color);
    $newArray1 = array_unique($color);

    echo "<pre>";
    print_r($newArray);
    echo "<pre>";

    echo "<pre>";
    print_r($newArray1);
    echo "<pre>";


?>