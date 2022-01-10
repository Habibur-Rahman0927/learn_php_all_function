<?php

    $str = "Yahoo Baba";
    echo $str ."<br>";

    echo trim($str, "a")."<br>";
    echo rtrim($str, "a")."<br>";
    echo ltrim($str, "Yba")."<br>";
    echo chop($str,"Baba")."<br>"; // right side remove
    $s = "        Habib      ";
    echo trim($s)."<br>";
?>