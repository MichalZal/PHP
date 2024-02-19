<?php
$db = mysqli_connect('locallhost', 'root', '', '4ip_baza1');
$q = "SELECT pracownicy.imie, pracownicy.nazwisko, pracownicy.dzial FROM pracownicy WHERE pracownicy.dzial='Reklama';";

$wynik = mysqli_query($db, $q);

if (mysqli_connect_errno()) {
    exit("Błąd połączeniaz serwerem MySQL:" . mysqli_connect_error());
} else {
    while ($el = mysqli_fetch_row($wynik)) {
        echo "Imie: " . $el[0] . "<br/> Nazwisko: " . $el[1] . "<br/>Dzial: " . $el[2] . "<br/><br/>";
    }
    mysqli_close($db);
}

