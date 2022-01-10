<?php
    echo strcmp("Hello world!","Hello world!")."<br>";
    echo strncmp("Hello world!","Hello world!",6)."<br>";
    echo strcasecmp("Hello world!","Hello world!")."<br>";
    echo strnatcmp("2Hello world!","2Hello world!")."<br>";
    echo strnatcasecmp("2Hello world!","2Hello world!")."<br>";
    echo substr_compare("Hello world!","world!",6,3)."<br>";
    echo similar_text("Hello world!","Hello Yahoo Babe",$per)."<br>";
    echo "percentage: $per";
?>