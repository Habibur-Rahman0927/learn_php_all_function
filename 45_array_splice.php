<?php
    $color = ["red", "green", "blue", "yellow", "brown"];

    $fruit  =["orange", "apple"];

    array_splice($color, 0,2, $fruit);

    echo "<pre>";
    print_r($color);
    echo "<pre>";

?>