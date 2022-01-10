<?php
    $a = array("a", "b", "c", "d", "e");

    $newArray = array_fill_keys($a,"testing");
    echo "<pre>";
    print_r($newArray);
    echo "<pre>";

    $newArray1 = array_fill(3,4,"testing");
    echo "<pre>";
    print_r($newArray1);
    echo "<pre>";


?>