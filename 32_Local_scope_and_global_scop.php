<?php


    $x = 10;
    function test(){
        global $x;
        echo "Variable x inside function : ".$x."<br>";
    }
    test();
    echo "Variable x outside function : ".$x;

?>