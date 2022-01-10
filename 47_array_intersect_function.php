<?php
    function compare($a, $b){
        if($a === $b){
            return 0;
        }
        return ($a > $b) ? 1 : -1;  
    }
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

    $a2 = array("a" => "red", "f" => "green", "d" => "purple");

    $a3 = array("a" => "red", "b" => "black", "h" => "yellow");
    $newArray = array_intersect($a1, $a2, $a3);
    $newArray1 = array_intersect_key($a1, $a2);
    $newArray2 = array_intersect_assoc($a1, $a2);
    $newArray3 = array_intersect_uassoc($a1, $a2,"compare");

    echo "<pre>";
    print_r($newArray);
    echo "<pre>";

    echo "<pre>";
    print_r($newArray1);
    echo "<pre>";

    echo "<pre>";
    print_r($newArray2);
    echo "<pre>";

    echo "<pre>";
    print_r($newArray3);
    echo "<pre>";
?>