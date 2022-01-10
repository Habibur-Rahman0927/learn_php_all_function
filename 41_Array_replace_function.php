<?php


    $fruit = ['orange', 'banana', 'apple','graps'];

    $veggie = ['carrot','pea'];

    $color = ['red', 'green', 'blue'];

    $newArray = array_replace($fruit, $veggie, $color);
    echo "<pre>";
    print_r($newArray);
    echo "<pre>";
    $fruitAss = ['orange', 'banana', 'apple','graps'];

    $veggieAss =['a'=>'carrot',1=>'pea'];
    $newArrayAss = array_replace($fruitAss, $veggieAss);
    echo "<pre>";
    print_r($newArrayAss);
    echo "<pre>";

    $array1 = array('a'=>array('red'),'b'=>array('green', 'pink'));
    $array2 = array("a" => array("yellow"), "b" => array("black"));

    $newArrayRecur = array_replace_recursive($array1,$array2);
    echo "<pre>";
    print_r($newArrayRecur);
    echo "<pre>";

?>