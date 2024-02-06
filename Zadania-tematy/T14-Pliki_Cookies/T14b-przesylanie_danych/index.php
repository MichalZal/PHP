<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 14b - Pzresyłanie danych użytkownich</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h2>Zadanie 14b</h2>
    <p>PHP Przesyłanie danych użytkownika

        (Podstawowa wersja rozwiązania)
        Utwórz skrypt, który dane użytkownika przesyłane za pomocą formularza będzie przekazywał do utworzonego pliku
        cookie. Formularz powinien zawierać imię i nazwisko użytkownika. </p>
    <p>(Wersja rozszerzona)

        Dodatkowo przekazana jest również data urodzin użytkownika. Skrypt powinien wyświetlać informację, za ile dni
        użytkownik będzie obchodził urodziny.</p>
</header>
<main>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div>
            <label for="imie">Podaj imię: </label>
            <input type="text" id="imie" name="imie">
        </div>
        <div>
            <label for="nazwisko">Podaj nazwisko: </label>
            <input type="text" id="nazwisko" name="nazwisko">
        </div>
        <div>
            <label for="data-urodzin">Podaj datę urodzenia: </label>
            <input type="date" id="data-urodzin" name="data-urodzin">
        </div>
        <input type="submit" value="Oblicz">
    </form>
    <hr>
    <?php

    function dniDoNastepnychUrodzin($dataUrodzin) {
        // Utwórz obiekt daty na podstawie daty urodzenia
        $birthday = new DateTime($dataUrodzin);
        // Pobierz dzisiejszą datę
        $today = new DateTime();

        // Ustaw datę urodzin na aktualny rok
        $birthday->setDate($today->format('Y'), $birthday->format('m'), $birthday->format('d'));

        // Jeśli urodziny w tym roku już minęły, ustaw na następny rok
        if ($today > $birthday) {
            $birthday->modify('+1 year');
        }

        // Oblicz różnicę między dzisiaj a datą urodzin
        $interval = $today->diff($birthday);

        // Zwróć liczbę dni do następnych urodzin
        return $interval->days;
    }


    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $data_urodzenia = $_POST['data-urodzin'];


        echo "$data_urodzenia <br/>";
        echo "$imie <br/>";
        echo "$nazwisko <br/>";
        setcookie("imie", $imie,  time()+120);
        setcookie("nazwisko", $nazwisko,  time()+120);
        setcookie("data-urodzenia", $data_urodzenia,  time()+120);
        $iloscDniDoUrodzin = dniDoNastepnychUrodzin($data_urodzenia);
        echo "następne urodziny będziesz miał za " . $iloscDniDoUrodzin . " dni";
    }





    ?>
</main>
</body>
</html>