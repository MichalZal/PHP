<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styl4.css">
    <title>Odżywianie zwierząt</title>
</head>
<body>
<header>
    <h2>DRAPIEŻNIKI I INNE</h2>
</header>
<section class="blok-pierwszy">
    <h3>Wybierz styl życia</h3>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <select name="styl" id="styl">
            <option value="1">Drapiezniki</option>
            <option value="2">Roślinożerne</option>
            <option value="3">Padlinożerne</option>
            <option value="4">Wszystkożerne</option>
        </select>
        <input type="submit" value="Zobacz">
    </form>
</section>
<section class="blok-lewy">
    <h3>Lista zwierząt</h3>
    <?php
    $db = mysqli_connect('localhost', 'root', '', 'baza');
    $q = "SELECT gatunek, rodzaj FROM zwierzeta AS z INNER JOIN odzywianie AS o ON z.Odzywianie_id = o.id;";
    $wynik = mysqli_query($db, $q);

    echo "<ul>";
    while ($el = mysqli_fetch_row($wynik)) {
        echo "<li>$el[0] -> $el[1]</li>";
    }
    echo "</ul>";

    ?>
</section>
<section class="blok_srodkowy">
    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $wybor = $_POST['styl'];

        $rodzaj = "";
        switch ($wybor) {
            case "1":
                $rodzaj = "Drapieżniki";
                break;
            case "2":
                $rodzaj = "Roślinożerne";
                break;
            case "3":
                $rodzaj = "Padlinożerne";
                break;
            case "4":
                $rodzaj = "Wszystkożerne";
                break;
        }

        echo "<h3>" . $rodzaj . "</h3>";

        $q2 = "SELECT zwierzeta.id, zwierzeta.gatunek, zwierzeta.wystepowanie FROM zwierzeta WHERE zwierzeta.Odzywianie_id=" . "$wybor" . ";";

        $wynik2 = mysqli_query($db, $q2);
        while ($el = mysqli_fetch_row($wynik2)) {
            echo "<p>$el[0], $el[1], $el[2]</p>";
        }
    }

    mysqli_close($db);

    ?>
</section>
<section class="blok-prawy">
    <img src="./drapieznik.jpg" alt="Wilki">
</section>
<footer>
    <a href="pl.wikipedia.org" target="_blank">Poczytaj o zwierzętach na Wikipedii</a>
    Autor: Michał Zalewski 4ip_1
</footer>
</body>
</html>