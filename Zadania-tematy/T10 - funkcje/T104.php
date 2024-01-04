<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadania z Funkcji - zad 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h2>Zadanie T104</h2>
    <p>Napisz funkcję, która będzie przyjmowała dwa argumenty liczbowe i będzie wypisywała mniejszą z nich w kolorze
        zielonym, a większą w czerwonym. W przypadku podania liczb jednakowych obie należy wyświetlić w kolorze
        niebieskim.
    </p>
    <table>
        <tr>
            <td>Imię i nazwisko</td>
            <td>Klasa/grupa</td>
            <td>Data:</td>
        </tr>
        <tr>
            <td>Michał Zalewski</td>
            <td>4pir_1</td>
            <td>11.12.2023</td>
        </tr>
    </table>
</header>
<main>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div>
            <label for="num">Podaj pierwszą liczbę: </label>
            <input type="number" id="num" name="num">
        </div>
        <div>
            <label for="num2">Podaj drugą liczbę: </label>
            <input type="number" id="num2" name="num2">
        </div>
        <input type="submit" value="Oblicz">
    </form>
    <hr>
    <?php

    function wypisz($num1, $num2)
    {
        if ($num1 > $num2) {
            echo "<p>Liczba <span style='color: green''>$num1</span> jest większa niż <span style='color: red'>$num2</span></p>";
        } elseif ($num2 > $num1) {
            echo "<p>Liczba <span style='color: green''>$num2</span> jest większa niż <span style='color: red'>$num1</span></p>";
        } elseif ($num1 === $num2) {
            echo "<p>Liczba <span style='color: blue''>$num2</span> jest równa <span style='color: blue'>$num1</span></p>";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num1 = $_POST['num'];
        $num2 = $_POST['num2'];

        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "Błąd. Proszę podać właściwe liczby!";
        } else {
            wypisz($num1, $num2);
        }
    }
    ?>
</main>
</body>
</html>