<?php
    $a = "Hello php";
    $find = ["Hello", "php"];
    $replace = ["hi", "javascript"];
    echo str_replace($find, $replace, $a)."<br>";
    echo str_ireplace($find, $replace, $a);//case insansitive;

    $color = ['blue', 'red', 'green','yellow'];
    echo "<pre>";
    print_r(str_replace('red', 'pink', $color));
    echo "<pre>";

    echo substr_replace($a, "Javascript",6 )."<br>";
    $array = ["Hello"=>"Hi", "php" => "javascript"];
    // echo strtr($a, "php","Jav");
    echo strtr($a, $array
);


    

?>