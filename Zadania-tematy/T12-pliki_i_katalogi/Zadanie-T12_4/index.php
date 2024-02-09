<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T12_4 Liczby binarne</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Liczby binarne z pliku napisy.txt</h1>
    <h2>Autor: Michał Zalewski</h2>
</header>
<main>
    <table>
        <tr>
            <th>Nr_liczby</th>
            <th>Liczba binarna</th>
            <th>Liczba dziesiętna</th>
        </tr>
        <?php

        $plik = fopen("napisy.txt", "r");
        $nrLiczby = 1;

        if ($plik) {

            while (($linia = fgets($plik)) !== false) {
                $linia = trim($linia);
                $liczbaDziesietna = bindec($linia);

                echo "<tr>";
                echo "<td>{$nrLiczby}</td>";
                echo "<td>{$linia}</td>";
                echo "<td>{$liczbaDziesietna}</td>";
                echo "</tr>";
                // Zwiększenie numeru kolejnej liczby
                $nrLiczby++;
            }

            fclose($plik);
        } else {
            echo "Błąd podczas otwierania pliku.";
        }
        ?>
    </table>
</main>
</body>
</html>