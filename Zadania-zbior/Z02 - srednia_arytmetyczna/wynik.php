<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TO jest strona z powitaniem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <?php
        $liczba1 = $_POST["liczbaA"];
        $liczba2 = $_POST["liczbaB"];
        $liczba3 = $_POST["liczbaC"];
        $liczba4 = $_POST["liczbaD"];

        $srednia = ($liczba1 + $liczba2 + $liczba3 + $liczba4)/4;
        $srednia_bez_zaokraglenia = round($srednia, 0);
        $srednia_zaokraglona = round($srednia, 4);


    echo "<h3>Średnia arytmetyczna: $srednia_bez_zaokraglenia</h3>";
    echo "<h3>Średnia arytmetyczna bez zaokrąglenia: $srednia_zaokraglona</h3>"

    ?>

</header>
</body>
</html>