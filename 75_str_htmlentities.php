<?php
    $str = "A 'quote' is <b>Bold</b>";

    echo $str."<br><br>";

    echo htmlentities($str)."<br>";

    $link = '<a href="https://www.yahoobab.net">Yahoo Baba</a>';
    echo $link ."<br><br>";

    $newLink = htmlentities($link,ENT_QUOTES);
    echo $newLink."<br><br>";
    echo html_entity_decode($newLink)."<br>";

    $newHtml= htmlspecialchars($link,ENT_QUOTES);
    echo $newHtml."<br>";

    echo htmlspecialchars_decode($newHtml);

    echo "<pre>";
    print_r(get_html_translation_table(HTML_SPECIALCHARS));
    echo "<pre>";
    echo "<pre>";
    print_r(get_html_translation_table(HTML_ENTITIES));
    echo "<pre>";


?>