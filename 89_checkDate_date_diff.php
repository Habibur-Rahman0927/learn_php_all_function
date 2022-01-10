<?php
    echo checkdate(2,15,2014);
    echo checkdate(2,29,2022);

    $date1 = date_create("2013-03-15");
    $date2 = date_create("2013-12-12");

    $diff = date_diff($date1, $date2);

    echo "<pre>";
    print_r($diff->days);
    echo "<pre>";

?>