<?php

    $food = array('orange', 'banana', 'grapes', 'apple');
    
    echo current($food)."<br>";
    echo key($food)."<br>";
    echo pos($food)."<br>";
    next($food);
    echo current($food)."<br>";
    echo key($food)."<br>";
    echo pos($food)."<br>";
    prev($food);
    echo current($food)."<br>";
    echo key($food)."<br>";
    echo pos($food)."<br>";
    end($food);
    echo current($food)."<br>";
    echo key($food)."<br>";
    echo pos($food)."<br>";

    $newArray  = each($food);
    echo "<pre>";
    print_r($newArray);
    echo "<pre>";

    reset($food);
    echo current($food)."<br>";
    echo key($food)."<br>";
    echo pos($food)."<br>";

?>