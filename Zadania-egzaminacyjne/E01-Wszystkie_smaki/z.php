<?php

echo "--------------- 1. Wszystkie potrawy ---------------";


$db = mysqli_connect('localhost', 'root', '', 'baza');
$q = "SELECT nazwa, cena FROM dania;";
$wynik = mysqli_query($db, $q);

echo "<ul>";
while ($el = mysqli_fetch_row($wynik)) {
    echo "<li> $el[0], $el[1]zł </li>";
}
echo "</ul>";
mysqli_close($db);

echo "--------------- 2. Same zupy ---------------";


$db = mysqli_connect('localhost', 'root', '', 'baza');
$q = "SELECT nazwa, cena FROM dania WHERE dania.typ = 1";
$wynik = mysqli_query($db, $q);

echo "<ul>";
while ($el = mysqli_fetch_row($wynik)) {
    echo "<li> $el[0], $el[1]zł </li>";
}
echo "</ul>";
mysqli_close($db);


echo "--------------- 3. Samochody i zamówienia ---------------";


$db = mysqli_connect('localhost', 'root', '', 'baza');
$q = "SELECT z.klient, s.marka, s.model, s.rocznik, z.telefon FROM zamowienia AS z INNER JOIN samochody AS s ON s.id = z.Samochody_id";
$wynik = mysqli_query($db, $q);

echo "<ul>";
while ($el = mysqli_fetch_row($wynik)) {
    echo "<li> $el[0] zamówił/ła $el[1], $el[2], $el[3], telefon: $el[4] </li>";
}
echo "</ul>";
mysqli_close($db);


echo "--------------- 4. Ogłoszenia ---------------";

$db = mysqli_connect("localhost", 'root', '', 'baza');

$q = "SELECT kategoria, podkategoria, tytul, tresc FROM ogloszenie";

$wynik = mysqli_query($db, $q);

echo "<ul>";
while ($el = mysqli_fetch_row($wynik)) {
    echo "<li>$el[0], $el[1], $el[2], $el[3]</li>";
}
echo "</ul>";
mysqli_close($db);