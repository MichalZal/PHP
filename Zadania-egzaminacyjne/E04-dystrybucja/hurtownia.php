<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hurtownia komputerowa</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
<section class="blok-listy">
    <ul>
        <li>Producenci
            <ol>
                <li>Intel</li>
                <li>AMD</li>
                <li>Motorola</li>
                <li>Corsair</li>
                <li>ADATA</li>
                <li>WD</li>
                <li>Kingstone</li>
                <li>Patriot</li>
                <li>Asus</li>
            </ol>
        </li>
    </ul>
</section>
<section class="blok-formularza">
    <h1>Dystrybucja sprzętu komputerowego</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="producent">Wybierz producenta</label>
        <br>
        <input type="number" min="0"  name="producent" id="producent">
        <input type="submit" value="WYŚWIETL">
    </form>
</section>
<section class="blok-logo">
    <img src="./sprzet.png" alt="Sprzedajemy komputery">
</section>
<section class="blok-glowny">
    <h2>Podespoły wybranego producenta</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $producent = $_POST['producent'];

        $db = mysqli_connect('localhost', 'root', '', 'sklep');
        $q = "SELECT podzespoly.nazwa, podzespoly.dostepnosc, podzespoly.cena FROM podzespoly WHERE podzespoly.producenci_id=" . $producent .";";

        $wynik = mysqli_query($db, $q);

        while ($el = mysqli_fetch_row($wynik)) {
            $dostepnosc = "";
            if ($el[1]) {
                $dostepnosc = "DOSTĘPNY";
            } else {
                $dostepnosc = "NIEDOSTĘPNY";
            }
            echo "<p>$el[0], $el[2], $dostepnosc</p>";
        }

        mysqli_close($db);
    }
    ?>
</section>
<footer>
    <h4>Zapraszamy od poniedziałku do soboty w godzinach
        7<sup>30</sup>-16<sup>30</sup></h4>
    Strony partnerów
    <a href="http://adata.pl/" target="_blank">ADATA</a>
    <a href="http://patriot.pl/" target="_blank">Patriot</a>
    <a href="mailto:biuro@hurt.pl">Napisz</a>
    <p>Stronę wykonał: Michał Zalewski 4ip_01</p>
</footer>
</body>
</html>