<?php

/* ----- Zmienne i typy zmiennych ----- */

/* --------- Typy zmiennych w PHP --------- */
/*
- String - znaków
- Integer - Liczba całkowita
- Float - Liczba rzeczywista
- Boolean - Typ logiczny - prawda lub fałsz
- Array - Tablica - pozwalająca przechowywać wiele wartości
- Object - Zmienna obiektowa
- NULL - Pusta wartość
- Resource - Specjalna zmienna przechowująca zasób
*/

/* --------- Zasady nazywania zmiennych --------- */
/*
- Nazwa musi zaczynać się od $
- Nazwy zmiennej muszą zaczynać się od litery lub znaku podkreślenia
- Zmienna nie zaczyna się od liczby
- Zmienne mogą zawierać tylko znaki alfanumeryczne i podkreślenia (A-z, 0-9 i _ )
- Zmienne rozróżniają wielkość liter ($name i $NAME to dwie różne zmienne)
*/

$nazwa = 'Mechanik'; // String // Może być w apostrofach lub cudzysłowach
$wiek = 40; // Integer
$obecny = true; // Boolean
$kwotaPodatku = 10.5; //Float

var_dump($kwotaPodatku);

/* --- Dodawanie zmiennej do łańcucha -- */

// Double quotes can be used to add variables to strings
echo "$nazwa ma $wiek szczęśliwych lat przed sobą.<br>";

// Jeszcze lepiej zrobić to tak (szczególnie jeśli używałeś takiego zapisu w JS)
echo "${nazwa} ma ${wiek} szczęśliwych lat przed sobą.<br>";

// łączenie łańcuchów znaków

$imie = 'Ala';
$wiek = 18;

echo '<h3>' . $imie . ' ma ' . $wiek . ' lat</h3>';

// Operacje arytmetyczne

echo 5 + 5;
echo 10 - 6;
echo 5 * 10;
echo 10 / 2;
echo 10 % 3;
echo 2 ** 3;

// Stałe - nie mogą zostać zmienione
define('HOST', 'localhost');
define('USER', 'root');
echo '<hr>';
var_dump(HOST);

const login = true;
echo "<hr>";

var_dump(login);
?>