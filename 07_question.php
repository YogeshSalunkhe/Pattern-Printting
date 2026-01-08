<?php
    $cnt = 1;
    for($r = 1; $r <= 5; $r++) {
        for($c = 1; $c <= 4; $c++) {
            printf("%02d&nbsp;&nbsp;", $cnt);
            $cnt++;
        }
        echo "<br>";
    }
?>