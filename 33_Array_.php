<?php
    $colors = array("Red", "Yellow", "Blue", "Green");

    echo $colors[1]."<br>";
    echo "<pre>";
    var_dump($colors);
    echo "<pre>";
    echo "<ul>";
    for ($i=0; $i < 4; $i++) { 
        echo "<li>$colors[$i]</li>";
    }
    echo "</ul>";

?>