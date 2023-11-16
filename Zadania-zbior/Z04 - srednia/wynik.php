<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 4 - wynik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 4 - wynik</h1>
    <?php
    $liczbaA = $_REQUEST['liczbaA'];
    $liczbaB = $_REQUEST['liczbaB'];

    $iloraz = round(($liczbaA / $liczbaB), 2);
    ?>
</header>
<main>
    <?php echo "<h3>Iloraz dzielenia liczby $liczbaA przez liczbę $liczbaB wynosi: </h3><br/>" ?>
    <?php echo "<h2>$iloraz</h2>" ?>
</main>
</body>
</html>

<?php
