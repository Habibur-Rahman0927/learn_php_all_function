<?php
    $emp = [
        [1, "krishana", "Manager", 4000],
        [2, "Habib", "Hasan", 4000],
        [3, "khan", "Rock", 4000],
    ];
    // echo $emp[0][0]." ";
    // echo $emp[0][2]." ";
    // echo $emp[0][3]." ";
    // echo "<pre>";
    // print_r($emp);
    // echo "<pre>";

    for ($row=0; $row < 3; $row++) { 
        for ($col= 0; $col < 4; $col++) { 
            echo $emp[$row][$col] ." ";
        }
        echo "<br>";
    }
    echo "<br>";
    foreach($emp as $v1){
        foreach($v1 as $v2){
            echo $v2 ." ";
        }
        echo "<br>";
    }

?>