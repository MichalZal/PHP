<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wynik php jest własnie tutaj</title>
</head>
<body>
<h1>Wynik twojego formularza :)</h1>
<hr>
<?php
// Przechowuje wszystkie wartośći wysłane do formularza. Jest to tablica. Więc łąpiemy przez nawiasy kwadratowe. Łapiemy po name'ie
$liczba = $_POST["liczba"];
$imie = $_POST["imie"];

echo "Twoja liczba to: <b>$liczba</b><br/>";
echo "Nazywasz się <b>$imie</b>";

?>
</body>
</html>
