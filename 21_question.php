<?php
    for($r = 1; $r <= 5; $r++) {
        $ch = 'A';
        for($c = 1; $c <= $r; $c++) {
            echo "&nbsp; ".$ch." &nbsp;";
            $ch++;
        }
        echo "<br>";
    }
?>