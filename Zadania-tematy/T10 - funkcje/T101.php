<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadania z Funkcji - zad 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h2>Zadanie T101</h2>
    <p>Napisz funkcję, która dla podanej liczby zwraca (return) jej wartość bezwzględną i zastosuj tę funkcję do
        wyświetlenia wyniku. Do obliczenia wartości bezwzględnej użyj instrukcji warunkowej (wariant 1) i operatora
        warunkowego "?" (wariant 2).</p>
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
            <label for="num">Podaj liczbę: </label>
            <input type="number" id="num" name="num">
        </div>
        <input type="submit" value="Oblicz">
    </form>
    <hr>
    <?php
    function wartoscBezwzgledna($num)
    {
        return ($num > 0) ? $num : $num * (-1);
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num = $_POST['num'];
        if (!is_numeric($num)) {
            echo "Błąd. Nie podano liczby!";
        } else {
            $abolutnyNum = wartoscBezwzgledna($num);
            echo "Wartość bezwzględna liczby $num, wynosi <b>$abolutnyNum</b>";
        }
    }
    ?>
</main>
</body>
</html>