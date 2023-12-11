<?php
// działanie range
echo "<pre>";

// liczby od 1 do 10
$tablica1 = range(1,10);
print_r($tablica1);

// liczby od 2 do 10 co 2
$parzyste = range(2,10,2);
print_r($parzyste);

// duże litery od A do Z
$duzeLitery = range('A','Z');
print_r($duzeLitery);

echo "</pre>";