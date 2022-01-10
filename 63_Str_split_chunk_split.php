<?php
    $str = "Yahoo Baba";
    $array = str_split($str);
    echo "<pre>";
    print_r($array);
    echo "<pre>";

    $newStr = chunk_split($str, 3, "...");
    echo "<pre>";
    print_r($newStr);
    echo "<pre>";
?>