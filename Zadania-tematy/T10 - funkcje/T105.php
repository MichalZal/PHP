<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadania z Funkcji - zad 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h2>Zadanie T105</h2>
    <p>Napisz funkcję, która dla dwóch liczb całkowitych wyświetla ich wspólny dzielnik (przypomnij sobie algorytm
        Euklidesa).
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

    function znajdzWspolnyDzielnik($num1, $num2)
    {
        while ($num2 != 0) {
            $temp = $num2;
            $num2 = $num1 % $num2;
            $num1 = $temp;
        }

        return $num1;
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num1 = $_POST['num'];
        $num2 = $_POST['num2'];

        if (is_numeric($num1) && is_numeric($num2)) {
            if ($num1 <= 0 || $num2 <= 0) {
                echo "Błąd. Liczby muszą być dodatnie";
            } else {
                $dzielnik = znajdzWspolnyDzielnik($num1, $num2);
                echo "Wspólnym dzielnikiem liczb $num1 i $num2 jest $dzielnik";
            }
        } else {
            echo "Podane wartości muszą być liczbami!";
        }
    }
    ?>
</main>
</body>
</html>