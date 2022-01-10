<?php
    $str = "Hello I am 'Yahoo Baba'";
    echo $str."<br>";

    $newStr = addslashes($str);
    echo $newStr."<br>";
    echo stripslashes($newStr)."<br>";
    $st = "Hello I am Yahoo Baba";
    $newS = addcslashes($st,"a...z" );
    echo $newS."<br>";
    // echo stripcslashes($newS);
    echo stripslashes($newS);


?>