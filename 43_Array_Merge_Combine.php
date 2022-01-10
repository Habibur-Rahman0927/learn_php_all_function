<?php
    $fruit = ["a" => "orange", "b" => "banana", "c" => "grapes"];

    $veggie = ["b" => "carrot", "e" => "pea"];

    // $newArray = array_merge($fruit, $veggie);
    $newArray = array_merge_recursive($fruit, $veggie);

    echo "<pre>";
    print_r($newArray);
    echo "<pre>";

    $name = array("Ram", "Mohan", "Salman");
    $age = array("33", "22", "11");

    $newCombineArray = array_combine($name, $age);
    echo "<pre>";
    print_r($newCombineArray);
    echo "<pre>";

?>