<?php
    $db = mysqli_connect('localhost', 'root', '', '4ip_baza1');
    $Q = "SELECT pracownicy.nazwisko, pracownicy.imie, pracownicy.stanowisko, pracownicy.sekcja FROM pracownicy WHERE pracownicy.sekcja='drukarki';";

    $wynik = mysqli_query($db, $Q);

    if (mysqli_connect_errno()) {
        exit("Błądpołączeniaz serwerem MySQL:". mysqli_connect_error());
    } else {
        echo"Połączono z serwerem baz danych.<br>";
        while ($el = mysqli_fetch_row($wynik)) {
            echo "<br/>Nazwisko: " . $el[0] . "<br/>imię: " . $el[1] . "<br/>Stanowisko: " . $el[2] . "<br/>";
        }
        mysqli_close($db);
    }


