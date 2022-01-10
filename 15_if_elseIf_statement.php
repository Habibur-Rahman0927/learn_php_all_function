<?php
    $per = 70;

    if($per >= 80 && $per <= 100){
        echo "you are in Merit.";
    }elseif($per >=60 && $per < 80){
        echo "you are in 1st Division";
    }elseif($per >=45 && $per < 60){
        echo "Your are in 2nd Division";
    }elseif($per >= 33 && $per < 45){
        echo "your are in 3rd Division";
    }elseif($per < 33){
        echo "Your are fail";
    }else{
        echo "Invalid & please enter the valid percentage";
    }


?>