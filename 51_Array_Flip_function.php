<?php
    $a = array(
        "Bill" => 10,
        "Joe" => 20,
        "Peter" => 30,
    );

    $newArray = array_flip($a);
    $newArray1 = array_change_key_case($a,CASE_UPPER);
    echo "<pre>";
    print_r($newArray);
    echo "<pre>";

    echo "<pre>";
    print_r($newArray1);
    echo "<pre>";
?>