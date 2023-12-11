<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 42</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 42 </h1>
    <h2>Autor: Michał Zalewski</h2>
    <p>Dane są dwie różne liczby całkowite.
        Napisz program który:
        sprawdza czy podane dwie liczby całkowite są parzyste i tylko w tym przypadku wypisuje większą z nich. W
        przypadku podania liczby nieparzystej wypisuje która to liczba lub liczby.
    </p>
</header>
<main>
    <hr>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <div>
            <label for="num1">Podaj liczbę a:</label>
            <input type="number" id="num1" name="num1" value="2">
        </div>
        <div>
            <label for="num2">Podaj liczbę b:</label>
            <input type="number" id="num2" name="num2" value="4">
        </div>
        <input type="submit" value="Wyślij">
    </form>
    <hr>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $a = $_POST['num1'];
            $b = $_POST['num2'];

            echo "A = $a<br/>";
            echo "B = $b<br/>";

            if ($a % 2 === 0 and $b % 2 === 0) {
                if ($a > $b) {
                    echo "Liczba $a jest większa od liczby $b<br/>";
                } else {
                    echo "Liczba $b jest większa od liczby $a<br/>";
                }
            } else {
                if ($a % 2 !== 0) {
                    echo "Liczba $a jest nieparzysta<br/>";
                } elseif ($b % 2 !== 0) {
                    echo "Liczba $b jest nieparzysta<br/>";
                }
            }
        } else {
            echo "Nie podano wartości!";
        }
    ?>
</main>
</body>
</html>