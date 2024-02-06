<?php

$mies = 2592000 + time();
setcookie("wizyta", date("Y-m-d H:i:s"), $mies);

if (isset($_COOKIE['wizyta'])) {
    $ostatnia = $_COOKIE['wizyta'];
    echo "Witamy ponownie! <br> Ostatni raz odwiedziłeś nas: " . $ostatnia;
} else {
    echo "Witamy na naszej stronie!";
}
