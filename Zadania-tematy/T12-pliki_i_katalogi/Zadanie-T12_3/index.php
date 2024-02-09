<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T12_3 - Imiona </title>
    <meta name="author" content="Michał Zalewski">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Imiona z pliku imiona.txt</h1>
    <h2>Autor: Michał Zalewski</h2>
</header>
<main>
    <div>
        <h2>Kolejność zapisana:</h2>
        <ul>
            <?php
            $plik = fopen("imiona.txt", "r");

            if ($plik) {
                while (($linia = fgets($plik)) !== false) {
                    echo "<li>" . htmlspecialchars($linia) . "</li>";
                }

                fclose($plik);
            } else {
                echo "Błąd podczas otwierania pliku.";
            }
            ?>
        </ul>
    </div>

    <div>
        <h2>Kolejność odwrotna:</h2>
        <ul>
            <?php
            $plik = fopen("imiona.txt", "r");

            if ($plik) {
                $imiona = [];
                while (($linia = fgets($plik)) !== false) {
                    $imiona[] = trim($linia); // Usunięcie ewentualnych białych znaków na początku i końcu linii
                }

                fclose($plik);

                foreach (array_reverse($imiona) as $imie) {
                    echo "<li>" . htmlspecialchars($imie) . "</li>";
                }
            } else {
                echo "Błąd podczas otwierania pliku.";
            }
            ?>
        </ul>
    </div>
</body>
</html>