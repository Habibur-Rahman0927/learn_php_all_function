<?php
    $color = ["red", "green", "blue", "yellow", "brown"];
    $color1 = ["a"=>"red", "b"=>"green", "44"=>"blue", "d"=>"yellow"];


    $newArray = array_slice($color, 2,3,true);
    $newArray1 = array_slice($color1, 2,2);

    echo "<pre>";
    print_r($newArray);
    echo "<pre>";
    echo "<pre>";
    print_r($newArray1);
    echo "<pre>";

?>