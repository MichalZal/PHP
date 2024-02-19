<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T07 - wynik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T07 - wynik</h1>
    <h2>Autor: Michał Zalewski</h2>
    <?php
    $imie = $_REQUEST['imie'];
    echo "Witaj ${imie} na mojej stronie!!!";
    ?>
</header>
<main>
    <hr>
    <?php
    $tab[] = $_REQUEST['liczba1'];
    $tab[] = $_REQUEST['liczba2'];
    $tab[] = $_REQUEST['liczba3'];
    $tab[] = $_REQUEST['liczba4'];

    foreach ($tab as &$value) {
        settype($value, 'integer');
    }

    echo "<br/><pre>";
    var_dump($tab);
    echo "</pre>";

    $suma = $tab[0] + $tab[1] + $tab[2] + $tab[3];
    $srednia = $suma / 4;

    echo "Suma liczb wynosi: <b>$suma</b> <br/>";
    echo "Średnia liczb wynosi: <b>$srednia</b>";
    ?>
</main>
</body>
</html>


