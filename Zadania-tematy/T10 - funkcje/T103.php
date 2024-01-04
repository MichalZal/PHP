<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadania z Funkcji - zad 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h2>Zadanie T103</h2>
    <p>Napisz funkcję, która dla podanej liczby całkowitej w zakresie od 1 do 12 zwraca nazwę miesiąca w języku polskim.
        W przypadku podania innej wartości zwraca informację o błędzie.
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
            <label for="num">Podaj liczbę w zakresie <1,12>: </label>
            <input type="number" id="num" name="num">
        </div>
        <input type="submit" value="Oblicz">
    </form>
    <hr>
    <?php
    function sprawdzMiesiac($num)
    {
        $nazwyMiesiacow = array("Styczeń", "Luty", "Marzec", "Kwieceiń", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień");
        return $nazwyMiesiacow[$num - 1];
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num = $_POST['num'];

        if (!is_numeric($num) || $num > 12 || $num < 1) {
            echo "Proszę podać liczbę z zakresu <1,12>";
        } else {
            $nazwaMiesaica = sprawdzMiesiac($num);
            echo "$nazwaMiesaica jest $num miesiącem w roku";
        }
    }
    ?>
</main>
</body>
</html>