<?php
    // logical operator

    // && Logical AND
    // || Logical OR
    // ! Logical NOT
    // and Logical AND
    // or Logical OR
    // xor Exclusive OR  true and true = false , false and false = false , false and true = ture;

    $age = 20;
    if($age >= 18 && $age <= 21){
        echo "you are eligible <br>";
    }
    if(!($age > 21)){
        echo "you are eligible <br>";
    }
    //xor
    $age = 20;
    if($age >= 18 xor $age <= 2){
        echo "you are eligible <br>";
    }



?>