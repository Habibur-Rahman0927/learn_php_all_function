<?php
    $str = "Hello World";
    $encodeString = convert_uuencode($str);
    echo $encodeString ."<br><br>";

    $decodeString = convert_uudecode($encodeString);
    echo $decodeString;


?>