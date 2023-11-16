<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie Z03 - wynik</title>
    <meta name="author" content="Michał Zalewski">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <?php
    $liczba_1 = $_REQUEST["liczba1"];
    $liczba_2 = $_REQUEST["liczba2"];
    $liczba_3 = $_REQUEST["liczba3"];
    $liczba_4 = $_REQUEST["liczba4"];

    $iloczyn = ($liczba_1 * $liczba_2 * $liczba_3 * $liczba_4);
    $srednia_geometryczna = pow($iloczyn, 0.25);

    echo "<h1>Witaj!!</h1><h2>Twoje liczby:</h2>";
    echo "a = $liczba_1<br />";
    echo "b = $liczba_2<br />";
    echo "c = $liczba_3<br />";
    echo "d = $liczba_4<br />";
    ?>
</header>
<main>
    <?php echo "<h3>Średnia geometryczna wynosi:" . round($srednia_geometryczna, 3) . "<br/></h3>" ?>
</main>
</body>
</html>


