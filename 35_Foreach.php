<?php

    $colors = [
        "red",
        "green",
        "blue"
    ];

    foreach ($colors as $value) {
        # code...
        echo $value."<br>";
    }

    $age =["bill"=> 32,"steve"=> 22,"elon"=>33];
    foreach($age as $key=> $value){
        echo $key."=".$value."<br>";
    }

?>