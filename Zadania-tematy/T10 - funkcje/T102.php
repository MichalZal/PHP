<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadania z funkcji - zad 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h2>Zadanie T102</h2>
    <p>Napisz funkcję, której wynikiem będzie podniesienie wartości przekazanego jej poprzez referencję argumentu do potęgi przekazanej również jako argument. Funkcja zwraca wartość i wyświetla wynik w postaci (np. dla wartości 2 i 3):
        <pre>
    x = 2
    y = 3
    xy=23=8
        </pre>
    </p>
    <table>
        <tr>
            <td>Imię i nazwisko</td>
            <td>Klasa/grupa</td>
            <td>Data:</td>
        </tr>
        <tr>
            <td>Michał Zalewski</td>
            <td>4pi_1</td>
            <td>11.12.2023</td>
        </tr>
    </table>
</header>
<main>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <div>
            <label for="num">Podaj liczbę: </label>
            <input type="number" id="num" name="num">
        </div>
        <div>
            <label for="num2">Podaj potęgę: </label>
            <input type="number" id="num2" name="num2">
        </div>
        <input type="submit" value="Oblicz">
    </form>
    <hr>
    <?php

    function potega(&$num, $wspolczynnik) {
        $num = pow($num, $wspolczynnik);
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num = $_POST['num'];
        $potega = $_POST['num2'];

        if (!is_numeric($num) || !is_numeric($potega)) {
            echo "Błąd. Proszę podać liczby!";
        } else {
            echo "Wartość liczby: $num<br/>";
            $numDoPotegi = potega($num, $potega);
            echo "Wartość liczby po podniesieniu do potęgi $potega: <b>$num</b>";
        }
    }
    ?>
</main>
</body>
</html>