<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T11_1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T11_1</h1>
    <h2>Autor: Michał Zalewski</h2>
    <p>Dana jest tablica zawierająca liczby. Napisz funkcję, która po otrzymaniu tej tablicy jako argumentu zwraca sumę
        dwóch najmniejszych liczb zapisanych w tablicy.</p>
</header>
<main>
    <?php

        function sumaNajmniejszychElementow(&$tablica)
        {
            sort($tablica, SORT_NATURAL);
            return $tablica[0] + $tablica[1];
        }

        $tab = [6, 4, 3, 7, 8, 3, 4, 7, 5, 4];

        echo "<h3>Tablica:</h3>";
        foreach ($tab as $i => $num) {
            echo "Tab[".$i."] = $num<br/>";
        }

        $suma = sumaNajmniejszychElementow($tab);
        echo "<h3>Posortowana tablica: </h3>";
        foreach ($tab as $i => $num) {
            echo "Tab[".$i."] = $num<br/>";
        }

        echo "<h3>Suma najmniejszych elementów tej tablicy: <b>$suma</b></h3>";

    ?>
</main>
</body>
</html>
