<?php
    for($r = 1; $r <= 5; $r++) {
        for($c = 1; $c <= 5; $c++) {
            if($r == 1 || $r == 5 || ($r+$c == 6)) {
                echo "&nbsp; * &nbsp;";
            } else {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
?>