<?php
    $str = "Hello world. It's a beautiful day";
    $newArray = explode(" ", $str);

    echo "<pre>";
    print_r($newArray);
    echo "<pre>";
    $str1 = 'red,green,blue,orange';
    $array = explode(",",$str1);

    echo "<pre>";
    print_r($array);
    echo "<pre>";

    $arr = array('Hello', 'World', "Beautifull",'day');

    $str2 = implode(" ", $arr);// join
    echo $str2;
?>