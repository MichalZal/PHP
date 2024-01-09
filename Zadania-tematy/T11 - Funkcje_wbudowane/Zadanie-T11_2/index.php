<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T11_2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T11_1</h1>
    <h2>Autor: Michał Zalewski</h2>
    <p>Dana jest tablica zawierająca imiona. Napisz funkcję, która wypisuje ilość imion żeńskich zapisanych w tablicy.
        Dla uproszczenia zakładamy, że imiona żeńskie to te, które kończą się na literę "a".</p>
</header>
<main>
    <?php

    function znajdzImionaZenskie($tablicaImion)
    {
        $liczbaZenskichImion = 0;
        foreach ($tablicaImion as $value) {
            if ($value[strlen($value) - 1] == "a") {
                $liczbaZenskichImion++;
            }
        }
        return $liczbaZenskichImion;
    }

    $tab = ["Kacper", "Artur", "Oliwia", "Martyna", "Jagoda", "Filip", "Weronika", "Gracjan", "Julia", "Miłosz", "Bartłomiej", "Ewelina", "Sara"];
    echo "<h3>Tablica:</h3>";
    foreach ($tab as $i => $num) {
        echo "Tab[".$i."] = $num<br/>";
    }

    echo "<h3>Liczba żeńskich imion w tej tablicy wynosi: <b>".znajdzImionaZenskie($tab)."</b></h3>";

    ?>
</main>
</body>
</html>
