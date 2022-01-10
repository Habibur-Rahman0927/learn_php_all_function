<?php
    $a = "Hello world. The world is incredable";

    echo strstr($a, "world")."<br>";
    echo stristr($a, "World",true)."<br>";
    echo strchr($a,"world")."<br>";
    echo strrchr($a,"world")."<br>";
    echo strpbrk($a,"eo")."<br>";
?>