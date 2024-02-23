<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filmoteka</title>
    <link rel="stylesheet" href="styl3.css"/>
</head>
<body>
<header>
    <div class="header-block">
        <img src="./dane/klaps.png" alt="Nasze filmy">
    </div>
    <div class="header-block">
        <h1>BAZA FILMÓW</h1>
    </div>
    <div class="header-block">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <select name="gatunek" id="gatunki">
                <option value="scifi">Sci-Fi</option>
                <option value="animacja">animacja</option>
                <option value="dramat">dramat</option>
                <option value="horror">horror</option>
                <option value="komedia">komedia</option>
            </select>
            <input type="submit" value="Filmy">
        </form>
    </div>
    <div class="header-block">
        <img src="./dane/gwiezdneWojny.jpg" alt="szturmowcy">
    </div>
</header>
<main>
    <section class="main-block">
        <h2>Wybrano filmy</h2>
        <?php
            $db = mysqli_connect('localhost', 'root', '', 'dane');

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $gatunek = $_POST['gatunek'];
                $numer = 0;

                switch ($gatunek) {
                    case "scifi":
                        $numer = 1;
                        break;
                    case "animacja":
                        $numer = 2;
                        break;
                    case "dramat":
                        $numer = 3;
                        break;
                    case "horror":
                        $numer = 4;
                        break;
                    case "komedia":
                        $numer = 5;
                        break;
                }

                $q = "SELECT filmy.tytul, filmy.rok, filmy.ocena FROM filmy WHERE filmy.gatunki_id=" . $numer . ";";
                $wynik = mysqli_query($db, $q);
                while ($el = mysqli_fetch_row($wynik)) {
                    echo "<p>Tytuł: " . $el[0] . ", Rok produkcji: " . $el[1] . ", Ocena: " . $el[2] . "</p>";
                }
                mysqli_close($db);

            }

        ?>
    </section>
    <section class="main-block">
        <h2>Wszystkie filmy</h2>
        <?php
        $db = mysqli_connect('localhost', 'root', '', 'dane');


        $q2 = "SELECT filmy.id, filmy.tytul, rezyserzy.imie, rezyserzy.nazwisko FROM filmy JOIN rezyserzy ON filmy.rezyserzy_id = rezyserzy.id;";
        $wynik = mysqli_query($db, $q2);
        while ($el = mysqli_fetch_row($wynik)) {
            echo "<p>" . $el[0] . ", " . $el[1] . ", Reżyserii: " . $el[2] ." ". $el[3] . "</p>";
        }
        mysqli_close($db);

        ?>
    </section>
</main>
<footer>
    <p>Autor: Michał Zalewski 4IP_1</p>
    <a href="./dane/kwerendy.txt">Zapytania do bazy</a>
    <a href="http://www.filmy.pl" target="_blank">Odnośnik do filmy.pl</a>
</footer>
</body>
</html>