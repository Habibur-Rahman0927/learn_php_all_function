<?php
    $date = date_create("2023-03-15 22:25:00"/* ,timezone_open() */);
    echo date_format($date,"l")."<br>";
    echo date_format($date,"d/m/Y H:i:s")."<br>";

?>