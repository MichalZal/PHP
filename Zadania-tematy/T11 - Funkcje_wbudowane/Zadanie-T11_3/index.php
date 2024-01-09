<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T11_3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T11_3</h1>
    <h2>Autor: Michał Zalewski</h2>
    <p>Dane są dwie tablice. Napisz funkcję, która otrzymuje obie tablice w argumencie i zwraca posortowaną tablicę
        zawierającą wszystkie elementy z pierwszej i drugiej tablicy.</p>
</header>
<main>
    <?php

    function posortujTablice($tablica1, $tablica2)
    {
        $zlaczoneTablice = array_merge($tablica1, $tablica2);
        sort($zlaczoneTablice, SORT_NATURAL);
        return $zlaczoneTablice;
    }

    ?>

    <div class="tablice">
        <div class="tablica1">
            <?php
            $tab1 = [6, 2, 6, 4, 8, 2, 1];

            echo "<h3>Tab1:</h3>";
            foreach ($tab1 as $i => $num) {
                echo "Tab[".$i."] = $num<br/>";
            }
            ?>
        </div>
        <div class="tablica2">
            <?php
            $tab2 = [1, 7, 3, 8, 93, 12];

            echo "<h3>Tab2:</h3>";
            foreach ($tab2 as $i => $num) {
                echo "Tab[".$i."] = $num<br/>";
            }
            ?>
        </div>
    </div>
    <div>
        <?php
            echo "<h3>Złączone i posortowane tablice Tab1 i Tab2: </h3>";
            $tablice = posortujTablice($tab1, $tab2);
            foreach ($tablice as $i => $num) {
                echo "Tab[".$i."] = $num<br/>";
            }
        ?>
    </div>
</main>
</body>
</html>
