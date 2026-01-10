<?php
    $no = 2;
    for($r = 5; $r >= 1; $r--) {
        for($c = 1; $c <= 4; $c++) {
            // echo "&nbsp;".$no."&nbsp;";
            printf("%02d&nbsp;&nbsp;", $no);
            $no += 2;
        }
        echo "<br>";
    }
?>