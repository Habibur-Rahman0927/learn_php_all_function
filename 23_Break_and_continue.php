<?php
    for ($i=0; $i < 10; $i++) { 
        if($i === 3){
            continue;
        }
        if($i === 7){
            break;
        }
        echo $i;
    }
?>