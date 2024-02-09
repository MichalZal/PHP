<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie </title>
</head>
<body>
    <h1>Imiona z pliku imiona.txt</h1>
    <div>
        <h2>Kolejność zapisana:</h2>
        <ul>
            <?php
            // Otwieranie pliku do odczytu
            $file = fopen("imiona.txt", "r");
            
            // Sprawdzenie, czy plik został otwarty poprawnie
            if ($file) {
                // Odczytanie pliku linia po linii
                while (($line = fgets($file)) !== false) {
                    // Wypisanie zawartości linii na stronie w postaci listy
                    echo "<li>" . htmlspecialchars($line) . "</li>";
                }
                
                // Zamknięcie pliku
                fclose($file);
            } else {
                // Komunikat o błędzie, jeśli nie udało się otworzyć pliku
                echo "Błąd podczas otwierania pliku.";
            }
            ?>
        </ul>
    </div>

    <div>
        <h2>Kolejność odwrotna:</h2>
        <ul>
            <?php
            // Otwieranie pliku do odczytu
            $file = fopen("imiona.txt", "r");
            
            // Sprawdzenie, czy plik został otwarty poprawnie
            if ($file) {
                // Odczytanie pliku linia po linii i zapisanie imion do tablicy
                $imiona = [];
                while (($line = fgets($file)) !== false) {
                    $imiona[] = trim($line); // Usunięcie ewentualnych białych znaków na początku i końcu linii
                }
                
                // Zamknięcie pliku
                fclose($file);

                // Wyświetlenie imion w odwrotnej kolejności
                foreach (array_reverse($imiona) as $imie) {
                    echo "<li>" . htmlspecialchars($imie) . "</li>";
                }
            } else {
                // Komunikat o błędzie, jeśli nie udało się otworzyć pliku
                echo "Błąd podczas otwierania pliku.";
            }
            ?>
        </ul>
    </div>
</body>
</html>