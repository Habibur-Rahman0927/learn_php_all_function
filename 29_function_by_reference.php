<?php
    function hello($a){
        $a = "Hey<br>";
        echo $a;
    }

    $str = "Hello<br>";

    hello($str);
    echo $str;


    function ref(&$a){
        $a = "Hey<br>";
        echo $a;
    }

    $str = "Hello<br>";
    ref($str);
    echo $str;

?>