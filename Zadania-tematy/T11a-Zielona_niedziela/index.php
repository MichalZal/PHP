<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zielona niediela</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
    $data = getdate();
    if ($data == 0) echo '<body style="background-color:green;">';
    else echo '<body style="background-color:rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).');">';
?>
<header>
    <h1>Zadanie T11a - zielona niedziela</h1>
    <h2>Autor: Michał Zalewski</h2>
    <p>Utwórz stronę, której tło będzie zielone w niedziele, natomiast w pozostałe dni tygodnia kolor będzie wybierany
        losowo</p>
</header>
</body>
</html>