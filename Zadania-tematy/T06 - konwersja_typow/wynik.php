<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T06 Konwersja typów</title>
    <link rel="stylesheet" href="style.css">
    <meta name="author" content="Michał Zalewski">
</head>
<body>
<header>
    <h1>Zadanie T06 - konwersja typów</h1>
    <h2>Autor: Michał Zalewski</h2>
</header>
<main>
    <?php
    $tekst = $_REQUEST['tekst'];
    echo "<p>Podana wartość ${tekst}</p>";
    settype($tekst, "integer");

    $tekstKwadrat = $tekst ** 2;

    echo "Podana wartość po konwersji: ${tekst} <br/>";
    echo "Ta wartość do kwadratu: " . $tekst ** 2 . "<br/>";
    echo "Ta wartość do pierwiastka kwadratowego: " . sqrt($tekst);
    ?>
    <p>Jeszcze raz? <a href="./index.html">Wróć :)</a></p>
</main>
</body>
</html>


<?php
//
//
///* ----- Zmienne i typy zmiennych ----- */
//
///* --------- Typy zmiennych w PHP --------- */
///*
//- String - znaków
//- Integer - Liczba całkowita
//- Float - Liczba rzeczywista
//- Boolean - Typ logiczny - prawda lub fałsz
//- Array - Tablica - pozwalająca przechowywać wiele wartości
//- Object - Zmienna obiektowa
//- NULL - Pusta wartość
//- Resource - Specjalna zmienna przechowująca zasób
//*/
//
///* --------- Zasady nazywania zmiennych --------- */
///*
//- Nazwa musi zaczynać się od $
//- Nazwy zmiennej muszą zaczynać się od litery lub znaku podkreślenia
//- Zmienna nie zaczyna się od liczby
//- Zmienne mogą zawierać tylko znaki alfanumeryczne i podkreślenia (A-z, 0-9 i _ )
//- Zmienne rozróżniają wielkość liter ($name i $NAME to dwie różne zmienne)
//*/
//
//$nazwa = 'Mechanik'; // String // Może być w apostrofach lub cudzysłowach
//$wiek = 40; // Integer
//$obecny = true; // Boolean
//$kwotaPodatku = 10.5; //Float
//
//var_dump($kwotaPodatku);
//
///* --- Dodawanie zmiennej do łańcucha -- */
//
//// Double quotes can be used to add variables to strings
//echo "$nazwa ma $wiek szczęśliwych lat przed sobą.<br>";
//
//// Jeszcze lepiej zrobić to tak (szczególnie jeśli używałeś takiego zapisu w JS)
//echo "${nazwa} ma ${wiek} szczęśliwych lat przed sobą.<br>";
//
//// łączenie łańcuchów znaków
//
//$imie = 'Ala';
//$wiek = 18;
//
//echo '<h3>' . $imie . ' ma ' . $wiek . ' lat</h3>';
//
//// Operacje arytmetyczne
//
//echo 5 + 5;
//echo 10 - 6;
//echo 5 * 10;
//echo 10 / 2;
//echo 10 % 3;
//echo 2 ** 3;
//
//// Stałe - nie mogą zostać zmienione
//define('HOST', 'localhost');
//define('USER', 'root');
//echo '<hr>';
//var_dump(HOST);
//
//const login = true;
//echo "<hr>";
//
//var_dump(login);