<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 42</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 42</h1>
    <h2>Autor: Michał Zalewski</h2>
</header>
<main>
    <hr>
    <?php
        $a = $_POST['num1'];
        $b = $_POST['num2'];

        if ($a % 2 === 0 and $b % 2 === 0) {
            if ($a > $b) {
                echo "Liczba $a jest większa od liczby $b<br/>";
            } else {
                echo "Liczba $b jest większa od liczby $a<br/>";
            }
        } else {
            if ($a % 2 !== 0) {
                echo "Liczba $a jest nieparzysta<br/>";
            } elseif ($b % 2 !== 0) {
                echo "Liczba $b jest nieparzysta<br/>";
            }
        }
    ?>
</main>
</body>
</html>

