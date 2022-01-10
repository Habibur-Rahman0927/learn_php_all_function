<?php
    // $color = ["red", "green", "blue", "yellow", "brown"];
    $color = ["first" => "red", "second" => "green", "third" => "blue", "Fourth" => "yellow", "Five" =>"brown"];

    $newArray = array_keys($color);
    $newArray1 = array_key_exists("Five",$color);
    echo "<pre>";
    print_r($newArray);
    echo "<pre>";
    echo "<pre>";
    print_r($newArray1);
    echo "<pre>";
?>