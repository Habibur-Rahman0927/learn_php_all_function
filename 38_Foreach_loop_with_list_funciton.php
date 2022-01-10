<?php
    $emp = [
        [1, "krishana", "Manager", 4000],
        [2, "Habib", "Hasan", 4000],
        [3, "khan", "Rock", 4000],
    ];
    foreach($emp as list($id,$name,$designation,$salary)){
        echo "$id $name $designation $salary <br>";
    }
    echo "<br>";

    $empAss = [
        ["id"=> 1, "name"=> "Krishana", "designation"=>"Manager","salary"=>5000],
        ["id"=> 2, "name"=> "Habib", "designation"=>"Hasan","salary"=>5000],
        ["id"=> 1, "name"=> "Khan", "designation"=>"Rock","salary"=>5000],
    ];

    foreach($empAss as list("id"=>$id,"name"=>$name,"designation"=>$designation,"salary"=>$salary)){
echo "$id $name $designation $salary <br>";
    }

?>