<?php
$imie1 = $_POST['imie1'];
$nazwisko1 = $_POST['nazwisko1'];

?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 17 - wynik szukania autora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 17 - podsrona wyników</h1>
    <p>Wyniki szukania autorów o danych:<br/> <?php echo "imie: " . $imie1 . "<br/>Nazwisko: " . $nazwisko1 ?></p>
    <a href="form_klient.html">Wróć</a>
</header>
<main>

    <?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=4ip_biblioteka', 'root');
        $zapytanie = $pdo->query("SELECT id, imie, nazwisko FROM autorzy WHERE imie='$imie1' and nazwisko='$nazwisko1';");

        echo "<table><tr><th>id</th><th>Imie</th><th>Nazwisko</th></tr>";
        foreach ($zapytanie as $wiersz) {
            echo "<tr><td>" . $wiersz['id'] . "</td><td>" . $wiersz['imie']
                . "</td><td>" . $wiersz['nazwisko'] . "</td></tr>";
        }
        echo "</table>";
        $pdo = null;
    } catch (PDOException $e) {
        echo "Błądpołączenia:" . $e->getMessage();
    }
    ?>
</main>
</body>
</html>
