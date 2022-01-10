<?php
    $a = "Hello World";

    echo strlen($a)."<br>";

    echo str_word_count($a);
    $array = str_word_count($a,2);
    echo "<pre>";
    print_r($array);
    echo "<pre>";

    $str = "Hello world. The world is nice";

    echo substr_count($str, "world",10,15);
?>