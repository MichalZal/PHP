<?php

$tekstDoWpisania = "W TYM ROKU NARODOWE CZYTANIE POD HONOROWYM PATRONATEM PARY PREZYDENCKIEJ ODBĘDZIE SIĘ 08.09.2018 R. W STULECIE ODZYSKANIA NIEPODLEGŁOŚCI WYBRANO POWIEŚĆ STEFANA ŻEROMSKIEGO „PRZEDWIOŚNIE”. 
WŁĄCZAJĄC SIĘ DO OGÓLNOPOLSKIEJ AKCJI, ZAPRASZAMY DO WSPÓLNEGO CZYTANIA W NASZEJ SZKOLE W PRZEDDZIEŃ TEGO WYDARZENIA 07.09.2018 R. 
NA DRUGIEJ GODZINIE LEKCYJNEJ W AULI SZKOLNEJ. CZYTAĆ BĘDĄ UCZNIOWIE KLASY 2M.
FORMUŁA SPOTKANIA NIE JEST ZAMKNIĘTA – KAŻDY MOŻE PRZYŁĄCZYĆ SIĘ DO CZYTANIA LUB SŁUCHANIA.";

// Zapisywanie tekstu do pliku
$plik = fopen("narodoweCzytanie.txt", "w");
fwrite($plik, $$tekstDoWpisania);
fclose($plik);

function odczytajIWypiszTekst($nazwaPliku) {

    $plik = fopen($nazwaPliku, "r");

    if ($plik) {
        while (($linia = fgets($plik)) !== false) {
            // Wypisanie zawartości linii na stronie
            echo htmlspecialchars($linia) . "<br>";
        }

        fclose($plik);
    } else {
        echo "Błąd podczas otwierania pliku.";
    }
}

// Wywołanie funkcji do odczytu danych i wyświetlenia ich na stronie
odczytajIWypiszTekst("narodoweCzytanie.txt");
?>