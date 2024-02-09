<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liczby binarne</title>
</head>
<body>
    <h1>Liczby binarne z pliku napisy.txt</h1>
    <table>
        <tr>
            <th>Nr_liczby</th>
            <th>Liczba binarna</th>
            <th>Liczba dziesiętna</th>
        </tr>
        <?php
        // Otwieranie pliku do odczytu
        $file = fopen("napisy.txt", "r");
        
        // Zmienna do przechowywania numeru kolejnej liczby
        $nrLiczby = 1;

        // Sprawdzenie, czy plik został otwarty poprawnie
        if ($file) {
            // Odczytanie pliku linia po linii
            while (($line = fgets($file)) !== false) {
                // Usunięcie ewentualnych białych znaków na początku i końcu linii
                $line = trim($line);
                // Konwersja liczby binarnej na dziesiętną
                $liczbaDziesietna = bindec($line);
                // Wyświetlenie danych w tabeli
                echo "<tr>";
                echo "<td>{$nrLiczby}</td>";
                echo "<td>{$line}</td>";
                echo "<td>{$liczbaDziesietna}</td>";
                echo "</tr>";
                // Zwiększenie numeru kolejnej liczby
                $nrLiczby++;
            }
            
            // Zamknięcie pliku
            fclose($file);
        } else {
            // Komunikat o błędzie, jeśli nie udało się otworzyć pliku
            echo "Błąd podczas otwierania pliku.";
        }
        ?>
    </table>
</body>
</html>