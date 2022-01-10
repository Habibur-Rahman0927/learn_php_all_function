<?php
    $array = array(
        array(
            "id" => 2201,
            "frist_name" => "Anil",
            "last_name" => "kapoor",
        ),
        array(
            "id" => 2202,
            "frist_name" => "Salman",
            "last_name" => "khan",
        ),
        array(
            "id" => 2203,
            "frist_name" => "John",
            "last_name" => "Abraham",
        )
        );
    $newArray = array_column($array,"frist_name",'id');

    echo "<pre>";
    print_r($newArray);
    echo "<pre>";

    $cars = ["Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel"];

    $newArrayChunk = array_chunk($cars, 2);
    echo "<pre>";
    print_r($newArrayChunk);
    echo "<pre>";

    $age = array(
        "Mohan" => "35",
        "Amin" => "33",
        "Aman" => "25",
        "Salam" => "26",
        "Kalam" => "16",
    );
    $newArrayChunk1 = array_chunk($age, 2,true);
    echo "<pre>";
    print_r($newArrayChunk1);
    echo "<pre>";
?>