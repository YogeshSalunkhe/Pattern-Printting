<?php
    for($r = 1; $r <= 5; $r++) {
        $no = 5*$r;
        for($c = 1; $c <= 4; $c++) {
           
            printf("%02d&nbsp;&nbsp;", $no);
            $no += 25;
        }
        echo "<br>";
    }
?>
