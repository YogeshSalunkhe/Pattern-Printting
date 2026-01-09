<?php
    for($r = 1; $r <= 5; $r++) {

        $ch = ($r % 2 != 0) ? 'A' : 'a';

        for($c = 1; $c <= 4; $c++) { 
                printf("%02c&nbsp;&nbsp;", ord($ch));
                $ch++;
        }
        echo "<br>";
    }
?>