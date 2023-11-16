<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Witaj na mojej stronie</h1>
<?php
echo "To jest mój tekst<br/> <hr/>";
?>
<form action="wynik.php" method="post">
    <div>
        <label for="imie">Podaj imię: </label>
        <input type="text" id="imie" name="imie">
    </div>

    <div>
        <label for="liczba">Podaj liczby:</label>
        <input type="number" id="liczba" name="liczba">
    </div>
    https://totylkokod.pl/baza-wiedzy/php-storm-skroty-ktore-warto-znac/
    <input type="submit" value="wyslij">
</form>
</body>
</html>