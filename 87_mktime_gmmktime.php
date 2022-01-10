<?php
    echo "Time & Date : " . date("d-m-Y h:i:sa") . "<br><br>";

    echo date("l",mktime(0,0,0,12,15,2020)). "<br><br>";
    echo date("d-m-Y h:i:sa",mktime(0,0,0,12,15,2020)). "<br><br>";
    echo date("d-m-Y-l",gmmktime(0,0,0,12,15,2020)). "<br><br>";

?>