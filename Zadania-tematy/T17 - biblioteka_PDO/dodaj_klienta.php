<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 17 - wynik dodawania</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Wynik dodawania do bazy</h1>
    <a href="form_klient.html">Wróć</a>
</header>
<main>
    <?php
    try {
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];

        $pdo = new PDO('mysql:host=localhost;dbname=4ip_biblioteka', 'root');
        $dodaj = $pdo->exec("INSERT INTO autorzy (imie, nazwisko)  
VALUES('$imie', '$nazwisko')");

        if ($dodaj > 0) {
            echo "Dodano: " . $dodaj . " wierszy<br>";
        } else {
            echo "Błąd podczas dodawania danych!<br>";
        }

        $pdo = null;
    } catch (PDOException $e) {
        echo "Błądpołączenia:" . $e->getMessage();
    }
    ?>
</main>
</body>
</html>

