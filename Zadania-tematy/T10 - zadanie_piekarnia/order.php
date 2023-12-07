<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piekarnia</title>
    <meta name="author" content="Michał Zalewski">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<header>
    <h1>Zamówienie online</h1>
    <h2>Autor: Michał Zalewski</h2>
</header>
<main>
    <?php

    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $wiek = $_POST['wiek'];

    echo "<h2>Dane zamawiającego:<br /></h2>";
    echo "<p>Imię: $imie</p>";
    echo "<p>Nazwisko: $nazwisko</p>";
    echo "<p>Wiek $wiek;</p><hr/>";

    $paczkow = $_POST['paczkow'];
    $grzebieni = $_POST['grzebieni'];
    $drozdowy = $_POST['drozdz'];
    $sposobDostawy = $_POST['dostawa'];

    function czyPierwsza($suma) {
        // liczby mniejsze niż 2 nie są liczbami pierwszymi
        if ($suma < 2) {
            return false;
        }

        // warunek, czy suma jest podzielna przez jakąkolwiek liczbę od 2 do pierwiastka kwadratowego z liczby. CZyil inaczej z zakresu <2, sqrt(suma)>/
        for ($i = 2; $i <= sqrt($suma); $i++) {
            if ($suma % $i === 0) {
                return false;
            }
        }
        return true;
    }

    function obliczObnizkeNaPaczki($paczkow) {
        $Cotrzecipaczek = 0;
        for ($i = 0; $i < $paczkow; $i++) {
            if ($paczkow > 3) {
                if ($i % 3 === 0) {
                    $Cotrzecipaczek++;
                }
            }
        }
        $roznica = $Cotrzecipaczek * 0.99;
        echo "Zamówiłeś $paczkow pączków. Co trzeci z nich jest darmowy, więc zaoszczędzisz $roznica zł";

        return $roznica;
    }

    function obliczCeneDostawy($sposobDostawy) {
        $cenaDostawy = 0;
        if ($sposobDostawy === "odbior") {
            $cenaDostawy = 0;
        } elseif ($sposobDostawy === "kurier") {
            $cenaDostawy = 7.00;
        } elseif ($sposobDostawy === "paczkomat") {
            $cenaDostawy = 5.00;
        }
        return $cenaDostawy;
    }

    function promocjaLosowa($iloscPaczkow, $iloscGrzebienie, $iloscDrozdzowek) {
        $czegoNajwiecej = "";
        $max = $iloscPaczkow;
        if ($iloscGrzebienie > $max) {
            $max = $iloscGrzebienie;
            $czegoNajwiecej = "grz";
        }
        if ($iloscDrozdzowek > $max) {
            $max = $iloscDrozdzowek;
            $czegoNajwiecej = "droz";
        }
        if ($max === $iloscPaczkow) {
            $czegoNajwiecej = "pacz";
        }

        $iloscDarmowychProduktow = rand(0, ($max * 0.5));
        return [$iloscDarmowychProduktow, $czegoNajwiecej];
    }

    $pormocjaLosowa = promocjaLosowa($paczkow, $grzebieni, $drozdowy);
//    echo "$pormocjaLosowa[0]<br/>";
//    echo "$pormocjaLosowa[1]<br/>";
// Uwzględnić jescze te liczby w promocji na największy produkt :)


    $obnizkaNaPaczki = obliczObnizkeNaPaczki($paczkow);
    $PaczekCena = ($paczkow * 0.99) - $obnizkaNaPaczki;
    $grzebieniCena = $grzebieni * 1.29;
    $DrozdzowyCena = $drozdowy * 2.00;

    $cenaDostawy = obliczCeneDostawy($sposobDostawy);
    $sumaBezPromocji = ceil($PaczekCena + $grzebieniCena + $DrozdzowyCena + $cenaDostawy);



    if ($wiek < 18) {
        echo "<p>Niestety $imie, nie masz jeszcze 18 lat, więc nie możesz złożyć zamówienia :(</p>";
    } else {
        if (!$grzebieni || !$paczkow || !$drozdowy) {
            echo "<h3>Proszę wypełnić wszystkie pola.</h3>";
        } else {
            echo <<<END
        
            <h2>Podsumowanie zamówienia</h2>
            
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Produkt</th><th>Ilość</th>
                    </tr>
            </thead>
                <tbody>
                 <tr>
                    <td>Pączek (0.99PLN/szt) <img src="./img/paczek.png" alt="Pączek"></td> <td>$paczkow</td>
                 </tr>
                
                <tr>
                    <td>Grzebień (1.29PLN/szt) <img src="./img/pngtree-a-big-baguette-clipart-png-image_2711457.jpg" alt=bułeczka"></td> <td>$grzebieni</td>
                </tr>
                <tr>
                    <td>Drożdżówy (2.00PLN/szt <img src="./img/drozdowa.png" alt="Drożdżóweczka"></td> <td>$drozdowy</td>
                 </tr
                 <tr>
                 <td>Sposób dostawy: $sposobDostawy</td> <td>$cenaDostawy PLN</td>
                </tr>
                <tr>
                    <td>SUMA</td> <td>$sumaBezPromocji PLN</td>
                </tr>
            </tbody>
            </table>
END;
        }
        $promocja = czyPierwsza($sumaBezPromocji);
        if ($promocja) {
            $sumaPromocja = $sumaBezPromocji * 0.90;
            echo "<hr/><p>Ponieważ liczba $sumaBezPromocji jest liczbą pierwszą, zastosowalismy promocję 10%. <br/>Prawidłowa cena wynosi <b>$sumaPromocja</b></p>";
        } else {
            echo "<p>Niestety suma $sumaBezPromocji nie jest liczbą pierwszą. Promocji ni ma :(</p>";

        }
    }

    ?>
    <br /><a href="index.php">Powrót do strony głównej</a>
</main>
</body>
</html>



