<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 07 - wynik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 01 - wynik</h1>
    <h2>Autor: Michał Zalewski</h2>
</header>
<main>
    <hr>
    <?php
        $stopnieCels = $_REQUEST['temp'];
        settype($stopnieCels, 'integer');
        $stopnieFahr = $stopnieCels * 1.8 + 32;
        $stopnieKelwin = $stopnieCels * 1.8 + 273.15;

        echo "Podane <sup>o</sup>C - $stopnieCels<br/>";
        echo "Podane <sup>o</sup>F - $stopnieFahr<br/>";
        echo "Podane <sup>o</sup>K - $stopnieKelwin";
    ?>
</main>
</body>
</html>

