<?php

    $food = ['orange', 'banana', 'apple'];

    echo count($food)."<br>";
    echo sizeof($food)."<br>";

    $empAss = [
        ["id"=> 1, "name"=> "Krishana", "designation"=>"Manager","salary"=>5000],
        ["id"=> 2, "name"=> "Habib", "designation"=>"Hasan","salary"=>5000],
        ["id"=> 1, "name"=> "Khan", "designation"=>"Rock","salary"=>5000],
    ];

    echo count($empAss,1)."<br>";
    echo count($empAss[0],1)."<br>";

    $foodlen = ['orange', 'banana', 'apple'];
    $len = count($foodlen);
    for ($i=0; $i < $len; $i++) { 
        echo $food[$i]." ";
    }

    echo "<pre>";
    print_r(array_count_values($foodlen));
    echo "<pre>";


?>