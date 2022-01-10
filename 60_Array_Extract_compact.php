<?php
    $a = "orange";
    $color = array('a' => 'red', 'b' => 'green', 'c' => 'blue');
    extract($color, EXTR_PREFIX_SAME, 'test');

    echo "value of a : $a <br>";
    echo "value of a : $test_a <br>";
    echo "value of b : $b <br>";
    echo "value of c : $c <br>";

    
    $firstname = "Yahoo";
    $lastname = "Baba";
    $age = "20";
    $gender = "Male";
    $country = "India";
    $extra = ["gender", "country"];

    $newArray = compact("firstname", "lastname", "age", $extra);

    echo "<pre>";
    print_r($newArray);
    echo "<pre>";
?>