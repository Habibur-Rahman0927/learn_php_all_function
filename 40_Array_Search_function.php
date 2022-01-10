<?php

    $a = ["orange", "banana", "apple", "graps",'55'];

    // echo in_array('apple',$a);
    if (in_array(55,$a,true)) {
        echo "Find Successfully.<br>";
    }else {
        echo "can't Find.<br>";
    };

    $b = array(array('p', 'h'), array('p', 'r'), 'o');
    if (in_array(array('p', 'h'),$b,true)) {
        echo "Find Successfully.<br>";
    }else {
        echo "can't Find.<br>";
    };

    $food = ["orange", "banana", "apple", "graps",'55'];
    echo array_search('apple',$food);

    $foodkey = ["a"=>"orange", "b"=>"banana", "c"=>"apple", "d"=>"graps","e"=>'55'];
    echo array_search("apple", $foodkey);


?>