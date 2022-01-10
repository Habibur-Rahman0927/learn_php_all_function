<?php
    $str  ="Hello <b>World</b>, Hello <i>Earth</i>";
    echo $str."<br><br>";
    echo strip_tags($str)."<br><br>";
    $strlorem = 'Lorem ipsum dolor sit amet consectetur.';

    echo wordwrap($strlorem, 4, "<br>")
?>