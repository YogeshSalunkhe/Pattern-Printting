<?php
    $ch = 'A';
    for($r = 1; $r <= 5; $r++) {
        for($c = 1; $c <= 4; $c++) {
           
            if($c % 2 == 1) {
                echo "&nbsp;". $ch ."&nbsp;";
            } else {
                echo "&nbsp;". strtolower($ch)."&nbsp;";
            }
        }
        $ch++;
        echo "<br>";
    }

?>