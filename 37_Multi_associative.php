<?php
    $marks = [
        "Krishana" => ["physics" => 85, "maths" => 78, "chemistry" => 89],
        "Salman" => ["physics" => 45, "maths" => 58, "chemistry" => 99],
        "Mohan" => ["physics" => 95, "maths" => 98, "chemistry" => 39],
    ];

    echo "<pre>";
    print_r($marks);
    echo "<pre>";
    foreach($marks as $key => $v1){
        echo $key ." ";
        foreach($v1 as $v2){
            echo $v2 ." ";
        }
        echo  "<br>";
    }

?>