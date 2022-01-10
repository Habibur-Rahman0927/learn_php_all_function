<?php
    function hello($argoment){
        echo "Hello $argoment"."<br>";
    }
    $func = "hello";

    $func('Habib');

    $anunimas_fun = function(){
        echo "hello";
    };

    $anunimas_fun();

?>