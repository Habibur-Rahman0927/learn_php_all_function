<?php

    echo "<pre>";
    print_r(getdate());
    print_r(getdate()['month']);
    echo "<pre>";

    $oldDate = mktime(0,0,0,03,15,2015);
    echo "<pre>";
    print_r(getdate($oldDate));
    echo "<pre>";

    echo "<pre>";
    print_r(gettimeofday(true))."<br>";
    print_r(gettimeofday());
    echo "<pre>";

    echo "<pre>";
    print_r(localtime());
    print_r(localtime(time(),true));
    print_r(localtime($oldDate,true));
    echo "<pre>";
?>