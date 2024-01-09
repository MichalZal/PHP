<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T11_4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T11_4</h1>
    <h2>Autor: Michał Zalewski</h2>
    <p>Napisz funkcję, która dla podanej daty w postaci mm, dd, YY sprawdzi, czy jest to prawidłowa data i jeśli tak
        sprawdzi, czy jest to data z przeszłości. Jeśli tak funkcja wypisze słowo „historia”, a jeśli nie wypisze
        „teraźniejszość lub przyszłość”. W przypadku błędnej danej funkcja kończy działanie i wyświetla komunikat o
        błędnej dacie.</p>
</header>
<main>
    <?php

    function sprawdzDate($mm, $dd, $yy)
    {
        if (checkdate($mm, $dd, $yy)) {
            $mojaData = mktime(0, 0, 0, $mm, $dd, $yy);
            $teraz = mktime(0, 0, 0, date("m"), date('d'), date('y'));
            if ($mojaData == $teraz) {
                echo "Teraźniejszość";
            } elseif ($mojaData > $teraz) {
                echo "Przyszłość";
            } elseif ($mojaData < $teraz) {
                echo "Przeszłość";
            }
        } else {
            echo "Data jest nieprawidłowa";
        }
    }

    sprawdzDate(1, 8, 24);
    ?>

    <div>

    </div>
</main>
</body>
</html>
