<?php

    $tab = Array(Array(), Array(), Array());

    for ($x = 0; $x < 3; $x++) {
        for ($y = 0; $y < 3; $y++) {
            $random = rand(0, 9);
            array_push($tab, $random);
        }
    }
    echo "<pre>";
    var_dump($tab);
    echo "</pre>";
?>